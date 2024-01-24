<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        if (isset($name)) {
            $customers = Customer::query()->where('name', $name)->get();
        } else {
            $customers = Customer::all();
        }
        return view('customers.index', ['customers' => $customers, 'name' => $name]);
    }
        
    public function create()
    {
        return view('customers.create');
    }

    public function edit($id)
    {
        $customer = Customer::query()->find($id);
        return view('customers.edit', ['customer' => $customer]);
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        Customer::query()->create($data);
        return redirect('/customers');
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::query()->find($id);
        $data = $request->all();
        /*$data = [
            'name' => '名前',
            'email' => 'test@example.com'
        ];*/
        $data['user_id'] = Auth::id();
        $customer->update($data);
        return redirect('/customers');
    }

}

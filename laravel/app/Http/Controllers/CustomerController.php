<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }
    
    public function create()
    {
        return view('customers.create');
    }

    public function edit()
    {
        return view('customers.edit');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();
        Customer::query()->create($data);
        return redirect('/customers');
    }

}

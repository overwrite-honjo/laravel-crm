<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">顧客登録</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/customers" class="grid grid-cols-1 gap-4">
                        @csrf
                        <div class="grid grid-cols-4 items-center">
                            <label class="col-span-1 text-right">顧客名：</label>  
                            <div class="col-span-2">
                                <input class="w-1/2 border border-gray-200 rounded p-1" name="name"/>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 items-center">
                            <label class="col-span-1 text-right">メールアドレス：</label>  
                            <div class="col-span-2">
                                <input class="w-1/2 border border-gray-200 rounded p-1" name="email"/>
                            </div>
                        </div>
                        <div class="text-center">
                            <button
                                class="px-2 py-1 border border-gray-200 rounded bg-blue-400 text-white"
                            >登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

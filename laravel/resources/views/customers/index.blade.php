<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">顧客一覧</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-1 gap-4 p-6 bg-white border-b border-gray-200">
                    <form>
                        <label>
                            顧客名：
                            <input class="border border-gray-200 rounded p-1" name="name"/>
                        </label>
                        <button
                            type="button" 
                            class="px-2 py-1 border border-gray-200 rounded bg-blue-400 text-white"
                        >検索</button>
                    </form>
                    <table class="w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                            <th class="px-4 py-2 border border-gray-200">顧客ID</th>
                            <th class="px-4 py-2 border border-gray-200">名前</th>
                            <th class="px-4 py-2 border border-gray-200">メールアドレス</th>
                            <th class="px-4 py-2 border border-gray-200">更新者</th>
                            <th class="px-4 py-2 border border-gray-200">編集</th>
                            <th class="px-4 py-2 border border-gray-200">削除</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="px-4 py-2 border border-gray-200 text-right">1</td>
                            <td class="px-4 py-2 border border-gray-200">顧客1</td>
                            <td class="px-4 py-2 border border-gray-200">customer1@test.com</td>
                            <td class="px-4 py-2 border border-gray-200">田中太郎</td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                                <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-yellow-400"
                                 >編集</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                            <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-red-500 text-white"
                                 >削除</button>
                            </td>
                            </tr>
                            <tr>
                            <td class="px-4 py-2 border border-gray-200 text-right">1</td>
                            <td class="px-4 py-2 border border-gray-200">顧客1</td>
                            <td class="px-4 py-2 border border-gray-200">customer1@test.com</td>
                            <td class="px-4 py-2 border border-gray-200">田中太郎</td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                                <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-yellow-400"
                                 >編集</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                            <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-red-500 text-white"
                                 >削除</button>
                            </td>
                            </tr>
                            <tr>
                            <td class="px-4 py-2 border border-gray-200 text-right">1</td>
                            <td class="px-4 py-2 border border-gray-200">顧客1</td>
                            <td class="px-4 py-2 border border-gray-200">customer1@test.com</td>
                            <td class="px-4 py-2 border border-gray-200">田中太郎</td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                                <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-yellow-400"
                                 >編集</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                            <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-red-500 text-white"
                                 >削除</button>
                            </td>
                            </tr>
                            <tr>
                            <td class="px-4 py-2 border border-gray-200 text-right">1</td>
                            <td class="px-4 py-2 border border-gray-200">顧客1</td>
                            <td class="px-4 py-2 border border-gray-200">customer1@test.com</td>
                            <td class="px-4 py-2 border border-gray-200">田中太郎</td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                                <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-yellow-400"
                                 >編集</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                            <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-red-500 text-white"
                                 >削除</button>
                            </td>
                            </tr>
                            <tr>
                            <td class="px-4 py-2 border border-gray-200 text-right">1</td>
                            <td class="px-4 py-2 border border-gray-200">顧客1</td>
                            <td class="px-4 py-2 border border-gray-200">customer1@test.com</td>
                            <td class="px-4 py-2 border border-gray-200">田中太郎</td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                                <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-yellow-400"
                                 >編集</button>
                            </td>
                            <td class="px-4 py-2 border border-gray-200 text-center">
                            <button
                                 type="button" 
                                 class="px-2 py-1 border border-gray-200 rounded bg-red-500 text-white"
                                 >削除</button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

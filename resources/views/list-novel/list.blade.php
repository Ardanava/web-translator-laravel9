<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List Novel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    LIST NOVEL <br><br>
                    {{-- Awal Tabel --}}
                    <div class="pb-4 bg-white dark:bg-gray-900">
                        <div class="relative mt-1">
                            <a href="tambah-novel" class="px-6 py-3 text-white no-underline bg-blue-500 rounded-full hover:bg-blue-600  hover:text-blue-200 focus:shadow-outline ">Tambah Novel</a>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Judul Novel
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Author
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipe
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Progress TL
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Lord of The Mysteries Book 1
                                    </th>
                                    <td class="px-6 py-4">
                                        Cuttlefish That Loves Diving
                                    </td>
                                    <td class="px-6 py-4">
                                        Web Novel
                                    </td>
                                    <td class="px-6 py-4">
                                        Tamat
                                    </td>
                                    <td class="px-6 py-4">
                                        ????
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> | 
                                        <a href="<?= url('/tambah-bab'); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Tambah Bab</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Akhir Tabel -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 

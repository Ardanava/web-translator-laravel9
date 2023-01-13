<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Novel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Awal Konten --}}
                    <h1>Cerita Apa yang Ingin Anda Tulis?</h1><br>
                    <form>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Novel yang Dipilih</label>
                                <input type="text" id="base-input" placeholder="Secara Automatis Menampilkan Judul Novel" readonly required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Volume yang Dipilih</label>
                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Novel A</option>
                                    <option>Novel B</option>
                                    <option>Novel C</option>
                                    <option>Novel D</option>
                                  </select>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Bab</label>
                                <input type="text" id="base-input" placeholder="Masukan Judul Bab Disini!" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Cerita</label>
                        </div>
                        <div id="editor">
                            <p>Tuliskan Cerita Anda Disini!</p>
                        </div> 
                        <div class="relative z-0 w-full mb-6 group">
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#editor' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                      </form>
                    {{-- Akhir Konten --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

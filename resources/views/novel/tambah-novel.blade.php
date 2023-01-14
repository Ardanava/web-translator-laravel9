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
                    <div class="">
                        <div class="">
                          <div class="rounded-t bg-white mb-0 px-6 py-6">
                            <div class="text-center flex justify-between">
                              <h6 class="text-blueGray-700 text-xl font-bold">
                                Tambah Novel
                              </h6>
                            </div>
                          </div>
                          <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                            <form>
                              <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Keterangan Novel
                              </h6>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Judul Novel
                                    </label>
                                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Judul Novel Di Sini">
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Penulis
                                    </label>
                                    <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Nama Penulis Di Sini">
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Penerbit
                                    </label>
                                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Nama Penerbit Di Sini">
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Tipe Novel
                                    </label>
                                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option>Novel</option>
                                        <option>Light Novel</option>
                                        <option>Web Novel</option>
                                        <option>Fan Fiction</option>
                                        <option>Original Novel</option>
                                        <option>Lainnya</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                      
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Sampul
                                    </label> 
                                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Status
                                    </label>
                                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option>Ongoing</option>
                                        <option>Tamat</option>
                                        <option>Hiatus</option>
                                        <option>Droped</option>
                                        <option>Banned</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Genre
                                    </label>
                                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option>Action</option>
                                        <option>Drama</option>
                                        <option>Horror</option>
                                        <option>Mysteries</option>
                                        <option>Thriller</option>
                                        <option>Lainnya</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Apakah ini Proyek Kerjasama?
                                    </label>
                                    <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option>Ya</option>
                                        <option>Tidak</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Sinopsis
                                    </label>
                                    <textarea type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Sinopsis Di Sini" rows="4"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                    {{-- Akhir Konten --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

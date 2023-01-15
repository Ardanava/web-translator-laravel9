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
                            <form action = "{{ route('novels.store') }}" method = "POST" enctype="multipart/form-data">
                              @csrf
                              <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                Keterangan Novel
                              </h6>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Judul Novel
                                    </label>
                                    <input name="judul_novel" required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Judul Novel Di Sini" autocomplete="off">
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Penulis
                                    </label>
                                    <input type="text" required name="penulis" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Nama Penulis Di Sini" autocomplete="off">
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Penerbit
                                    </label>
                                    <input type="text" required name="penerbit" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Nama Penerbit Di Sini" autocomplete="off">
                                  </div>
                                </div>
                                <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Tipe Novel
                                    </label>
                                    <select name="tipe" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="Novel">Novel</option>
                                        <option value="Light Novel">Light Novel</option>
                                        <option value="Web Novel">Web Novel</option>
                                        <option value="Fan Fiction">Fan Fiction</option>
                                        <option value="Original Novel">Original Novel</option>
                                        <option value="Lainnya">Lainnya</option>
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
                                    <input name="sampul_novel" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" autocomplete="off">
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Status
                                    </label>
                                    <select name="status" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="Ongoing">Ongoing</option>
                                        <option value="Tamat">Tamat</option>
                                        <option value="Hiatus">Hiatus</option>
                                        <option value="Droped">Droped</option>
                                        <option value="Banned">Banned</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Genre
                                    </label>
                                    <input name="genre" required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Genre Novel Di Sini" autocomplete="off">
                                  </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                      Apakah ini Proyek Kerjasama?
                                    </label>
                                    <select name="kerjasama" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
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
                                    <textarea name="sinopsis" required type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Masukan Sinopsis Di Sini" rows="4" autocomplete="off"></textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                    <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Tambah Novel">
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

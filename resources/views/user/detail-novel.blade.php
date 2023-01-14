<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Novel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Awal Konten --}}
                    <div id="__next">
                        <header class="overflow-hidden bg-slate-100 lg:bg-transparent lg:px-5">
                            <div class="mx-auto grid max-w-6xl grid-cols-1 grid-rows-[auto_1fr] gap-y-16 pt-16 md:pt-20 lg:grid-cols-12 lg:gap-y-20 lg:px-3 lg:pb-36 lg:pt-20 xl:py-32">
                                <div class="relative flex items-end lg:col-span-5 lg:row-span-2">
                                    <div class="relative z-10 mx-auto flex w-64 rounded-xl bg-slate-600 shadow-xl md:w-80 lg:w-auto">
                                        <img alt="" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1598845986l/55176693._SX318_.jpg" decoding="async"/>
                                    </div>
                                </div>
                                    <div class="bg-white pt-16 lg:col-span-7 lg:bg-transparent lg:pt-0 lg:pl-16 xl:pl-20">
                                        <div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:px-0">
                                            <h1 class="font-display text-5xl font-extrabold text-slate-900 sm:text-6xl">
                                                Judul Tampil Di Sini
                                            </h1>
                                            <p class="mt-4 text-3xl text-slate-600"> Kutipan Singkat Tampil Di Sini </p>
                                            <div class="mt-8 flex gap-4">
                                                <a class="inline-flex justify-center rounded-md py-1 px-4 text-base font-semibold tracking-tight shadow-sm focus:outline-none bg-blue-600 text-white hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:bg-blue-700 active:text-white/80 disabled:opacity-30 disabled:hover:bg-blue-600" href="/#free-chapters">
                                                    Tabel Konten
                                                </a>
                                                <a class="inline-flex justify-center rounded-md border py-[calc(theme(spacing.1)-1px)] px-[calc(theme(spacing.4)-1px)] text-base font-semibold tracking-tight focus:outline-none border-blue-300 text-blue-600 hover:border-blue-400 hover:bg-blue-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:text-blue-600/70 disabled:opacity-40 disabled:hover:border-blue-300 disabled:hover:bg-transparent" href="/#pricing">
                                                    Situs Resmi
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <section id="introduction" aria-label="Introduction" class="pt-20 pb-16 sm:pb-20 md:pt-36 lg:py-32"><div class="mx-auto px-4 sm:px-6 md:max-w-2xl md:px-4 lg:max-w-4xl lg:px-12 text-lg tracking-tight text-slate-700">
                            <p class="font-display text-4xl font-bold tracking-tight text-slate-900">
                                Sinopsis
                            </p>
                            <p class="mt-4">
                                Sinopsis Tampil Di Sini
                            </p>
                            {{-- <p class="mt-10">
                                <a class="text-base font-medium text-blue-600 hover:text-blue-800" href="/#free-chapters">
                                    Get two free chapters straight to your inbox<!-- --> 
                                    <span aria-hidden="true">
                                        →
                                    </span>
                                </a>
                            </p> --}}
                        </div>
                    </section>
                    <footer class="relative pt-5 pb-20 sm:pb-32 sm:pt-14">
                        <div class="absolute inset-x-0 top-0 h-32 text-slate-900/10 [mask-image:linear-gradient(white,transparent)]">
                            <svg aria-hidden="true" class="absolute inset-0 h-full w-full">
                                <defs>
                                    <pattern id=":Rf6:" width="128" height="128" patternUnits="userSpaceOnUse" x="50%">
                                        <path d="M0 128V.5H128" fill="none" stroke="currentColor"></path>
                                    </pattern>
                                </defs>
                                <rect width="100%" height="100%" fill="url(#:Rf6:)"></rect>
                            </svg>
                        </div>
                        <div class="relative text-center text-sm text-slate-600">
                            <p>Copyright © <!-- -->2023<!-- --> Celestial Translation</p>
                        </div> 
                    </footer>
                </div>
                    {{-- Akhir Konten --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

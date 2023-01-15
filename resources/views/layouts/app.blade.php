<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Celestial Translation') }}</title>
        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.css" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        
        <link rel="preload" as="image" imageSrcSet="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcover.63d6cb7d.png&amp;w=1080&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fcover.63d6cb7d.png&amp;w=1920&amp;q=75 2x"/>
        <meta name="next-head-count" content="5"/>
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://cdn.fontshare.com" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@800,500,700&amp;display=swap"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preload" href="/_next/static/css/cf3fa9892c73737a.css" as="style"/>
        <link rel="stylesheet" href="/_next/static/css/cf3fa9892c73737a.css" data-n-g=""/>
        <noscript data-n-css="">
            </noscript>
            <script defer="" nomodule="" src="/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
            <script src="/_next/static/chunks/webpack-b8f8d6679aaa5f42.js" defer=""> </script>
            <script src="/_next/static/chunks/framework-3b5a00d5d7e8d93b.js" defer=""></script>
            <script src="/_next/static/chunks/main-1f2538228a1f74e7.js" defer=""></script>
            <script src="/_next/static/chunks/pages/_app-b33019fe86435484.js" defer=""></script>
            <script src="/_next/static/chunks/491-233736c30b4c572f.js" defer=""></script>
            <script src="/_next/static/chunks/pages/index-96ed339b141e2b0b.js" defer=""></script>
            <script src="/_next/static/_96eKTulDcm1RqkQNcGXA/_buildManifest.js" defer=""></script>
            <script src="/_next/static/_96eKTulDcm1RqkQNcGXA/_ssgManifest.js" defer=""></script>
            <style data-href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap">
                @font-face{font-family:'Inter';font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyeMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyfMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuOKfMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyfMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuI6fMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuGKYMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuFuYMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuDyYMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuBWYMZs.woff) format('woff')}
                @font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2JL7W0Q5n-wU.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}
                @font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa0ZL7W0Q5n-wU.woff2) format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}
                @font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2ZL7W0Q5n-wU.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1pL7W0Q5n-wU.woff2) format('woff2');unicode-range:U+0370-03FF}
                @font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa2pL7W0Q5n-wU.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}
                @font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa25L7W0Q5n-wU.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}
                @font-face{font-family:'Inter';font-style:normal;font-weight:100 900;font-display:swap;src:url(https://fonts.gstatic.com/s/inter/v12/UcC73FwrK3iLTeHuS_fvQtMwCp50KnMa1ZL7W0Q5nw.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}
            </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            
            @if (isset(Auth::user()->name))
                @include('layouts.navigation')
            @else
                @include('layouts.navigationuser')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{}},"page":"/","query":{},"buildId":"_96eKTulDcm1RqkQNcGXA","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[]}</script>
        <footer class="relative pt-5 pb-20 sm:pb-10 sm:pt-14">
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
                <p>Copyright © <!-- -->2023<!-- --> <a href="https://github.com/Ardanava" class="text-black transition duration-300 ease-in-out" target=”_blank”>Celestial Translation</a></p>
            </div>
        </footer>
    </body>
</html>

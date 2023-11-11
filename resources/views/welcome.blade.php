<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/favicon.png') }}">
      <meta name="news_keywords" content=""/>
      <title>SIPENAG</title>
      {{-- EEEC164E-AA994FBD-BA9A0874-560BB64A --}}
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      <!-- Styles -->
      {{-- 
      <style>
         /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
      </style>
      --}}
      <script src="https://cdn.tailwindcss.com"></script>
      <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>     
   </head>
   <style>
      html {
      scroll-behavior: smooth;
      }
   </style>
   <body>
      <div class="bg-gray-600">
         <header>
            <div class="bg-white" x-data="{ isOpen: false }">
               <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
                  <div class="flex items-center justify-between">
                     <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500 md:text-2xl hover:text-indigo-400"
                        href="#">
                     <img class="dark-logo" src="{{ url('/images/logo-pendis.png') }}" alt="Ditjen Pendis Logo">
                     </a>
                     <!-- Mobile menu button -->
                     <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                           aria-label="toggle menu">
                           <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                              <path fill-rule="evenodd"
                                 d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                              </path>
                           </svg>
                        </button>
                     </div>
                  </div>
                  <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                  @if (Route::has('login'))
                  <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                     @auth
                     <a href="{{ url('/home') }}" class="text-gray-800 hover:text-indigo-400">Home</a>
                     @else
                     <a href="{{ route('login') }}" class="text-gray-800 hover:text-indigo-400">Log in</a>
                     @if (Route::has('register'))
                     <a href="{{ route('register') }}" class="text-gray-800 hover:text-indigo-400">Register</a>
                     @endif
                     @endauth
                  </div>
                  @endif
               </nav>
            </div>
         </header>
         <section class="items-center max-w-screen-xl px-4 pb-12 mx-auto mt-24 lg:flex md:px-8">
            <div class="space-y-4 sm:text-center lg:text-left">
               <h1 class="text-4xl font-bold text-white xl:text-5xl">
                  SI
                  <span class="text-indigo-400"> PENAG</span>
               </h1>
               <p class="max-w-xl text-gray-300 sm:mx-auto lg:ml-0">
                  SISTEM INFORMASI PENGAWAS MADRASAH DIREKTORAT JENDERAL PENDIDIKAN ISLAM KEMENTERIAN AGAMA
               </p>
               <div class="items-center justify-center pt-10 space-y-3 sm:space-x-6 sm:space-y-0 sm:flex lg:justify-start">
                  <a href="javascript:void(0)"
                     class="block w-full py-3 text-center text-gray-800 bg-white rounded-md shadow-md px-7 sm:w-auto">
                  Get started
                  </a>
                  <a href="#contact"
                     class="block w-full py-3 text-center text-gray-200 bg-gray-700 rounded-md px-7 sm:w-auto">
                  Contact US
                  </a>
               </div>
            </div>
            <div class="text-center mt-7 lg:mt-0 lg:ml-3">
               <img src="{{ url('/images/sipenag_banner.jpeg') }}"
                  class="w-full mx-auto sm:w-10/12 lg:w-full" alt="image" />
            </div>
         </section>
      </div>
      <!-- Section 5 -->
      <section class="relative text-gray-900 bg-white border-solid" id="features">
         <div class="mx-auto border-solid lg:pl-8 max-w-7xl">
            <h2 class="m-0 text-2xl font-bold text-left text-transparent bg-clip-text bg-gradient-to-t from-blue-500 to-purple-500 sm:text-4xl md:text-3xl">
            <div class="mb-4 text-center my-10">
               <h2>Fitur Sipenag</h2>
               <p class="mt-2 text-xl text-center border-0 border-gray-200">Pengembangan Karir Tenaga Kependidikan Madrasah</p>
            </div>
            <div class="flex flex-col items-center text-gray-900 border-0 border-gray-200 lg:flex-row">
               <div
                  class="w-full h-full overflow-hidden text-gray-900 border-0 border-gray-200 lg:w-1/2">
                  <div class="grid gap-4 mt-8 border-0 border-gray-200 sm:mt-10 sm:gap-6 lg:mt-12 lg:gap-8">
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 rounded">
                            <img src="{{ url('/images/comment-3-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Layanan Usulan Kebutuhan Formasi Pengawas dari Provinsi serta Kabupaten/Kota.</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                            <img src="{{ url('/images/print-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menerbitkan Informasi Rekrutmen Formasi Pengawas Sesuai Kebutuhan</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                            <img src="{{ url('/images/save-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menyimpan dan Menampilkan Formasi Pengawas</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                            <img src="{{ url('/images/docs-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menyimpan dan Menampilkan Informasi Persyaratan Pendaftaran Pengawas</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                          <img src="{{ url('/images/valid-document-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Melakukan Verifikasi Informasi Pendaftaran Pengawas dari Calon Pengawas</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="w-full h-full overflow-hidden text-gray-900 border-0 border-gray-200 lg:w-1/2">
                  <div class="grid gap-4 mt-8 border-0 border-gray-200 sm:mt-10 sm:gap-6 lg:mt-12 lg:gap-8">
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                          <img src="{{ url('/images/doc-append-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menyimpan dan Menampilkan Informasi Persyaratan Pendaftaran Pengawas</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                          <img src="{{ url('/images/doc-star-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menyimpan dan Menampilkan Informasi Hasil Seleksi Administrasi Formasi Pengawas</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                          <img src="{{ url('/images/doc-richtext-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menyimpan dan Menampilkan Informasi Hasil Seleksi Administrasi Formasi Pengawas</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                          <img src="{{ url('/images/doc-search-svgrepo-com.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Menyimpan dan Melakukan Verifikasi Usulan Penetapan Pengawas</p>
                        </div>
                     </div>
                     <div class="flex items-start text-gray-900 border-solid ">
                        <div class="flex items-center justify-center w-12 h-12 bg-purple-600 border-0 border-gray-200 rounded">
                          <img src="{{ url('/images/print-svgrepo-com1.png') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
                        </div>
                        <div class="flex-1 ml-6 border-0 border-gray-200">
                           <p class="m-0 text-base leading-normal text-gray-900 border-solid ">Sistem Dapat Menerbitkan SK pengawas</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Section 8 -->
      <section class="bg-white" id="blogs">
         <div class="w-full px-8 py-10 mx-auto lg:max-w-7xl">
            <div class="mb-4 text-center">
               {{-- <h3 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-t from-blue-500 to-purple-500">Our Blog</h3> --}}
            </div>
            <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-1">
              <img src="{{ url('/images/dataemisganjil20222023.jpeg') }}"class="w-full mx-auto sm:w-10/12 lg:w-half" alt="image" />                    
            </div>
            {{-- <div class="grid gap-x-8 gap-y-12 sm:gap-y-16 md:grid-cols-2 lg:grid-cols-3">
               <div class="relative p-2 border border-indigo-600 rounded-md">
                  <a href="#" class="block overflow-hidden">
                  <img
                     src="https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                     class="object-cover w-full h-56" alt="image">
                  </a>
                  <div class="relative mt-5 mb-1">
                     <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10/10/2022</p>
                     <a href="#" class="block mb-3">
                        <h2 class="text-2xl font-bold">
                           Tailwind CSS Blogs 1
                        </h2>
                     </a>
                     <p class="mb-4 text-gray-700">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem 
                     </p>
                     <a href="#" class="px-2 py-2 text-sm text-white bg-purple-500 rounded">Read More</a>
                  </div>
               </div>
               <div class="relative p-2 border border-indigo-600 rounded-md">
                  <a href="#" class="block overflow-hidden">
                  <img
                     src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmFuZG9tfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                     class="object-cover w-full h-56" alt="image">
                  </a>
                  <div class="relative mt-5 mb-1">
                     <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10/10/2022</p>
                     <a href="#" class="block mb-3">
                        <h2 class="text-2xl font-bold">
                           Tailwind CSS Blogs 3
                        </h2>
                     </a>
                     <p class="mb-4 text-gray-700">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem 
                     </p>
                     <a href="#" class="px-2 py-2 text-sm text-white bg-purple-500 rounded">Read More</a>
                  </div>
               </div>
               <div class="relative p-2 border border-indigo-600 rounded-md">
                  <a href="#" class="block overflow-hidden">
                  <img
                     src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJhbmRvbXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                     class="object-cover w-full h-56" alt="image">
                  </a>
                  <div class="relative mt-5 mb-1">
                     <p class="uppercase font-semibold text-xs mb-2.5 text-purple-600">10/10/2022</p>
                     <a href="#" class="block mb-3">
                        <h2 class="text-2xl font-bold">
                           Tailwind CSS Blogs 3
                        </h2>
                     </a>
                     <p class="mb-4 text-gray-700">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem 
                     </p>
                     <a href="#" class="px-2 py-2 text-sm text-white bg-purple-500 rounded">Read More</a>
                  </div>
               </div>
            </div> --}}
         </div>
      </section>
      <section class="relative text-gray-600" id="contact">
         <div class="container flex justify-center px-5 py-12 mx-auto items-cener sm:flex-nowrap">
            <div class="flex flex-col w-full max-w-xl">
               <h2 class="mb-1 text-3xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-t from-blue-500 to-purple-500">Contact US</h2>
               <p class="mb-5 text-center text-gray-600">
                  Any questions or remarks ? Just write us a message !
               </p>
               <div class="relative mb-4">
                  <label for="name" class="text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name"
                     class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
               </div>
               <div class="relative mb-4">
                  <label for="email" class="text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email"
                     class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
               </div>
               <div class="relative mb-4">
                  <label for="message" class="text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message"
                     class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-white border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
               </div>
               <button
                  class="px-6 py-2 text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Send</button>
            </div>
         </div>
      </section>
      <footer class="text-gray-600">
         <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
            <a class="flex items-center justify-center font-medium text-gray-900 md:justify-start">
            <span class="ml-3 text-xl text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500">SiPenag</span>
            </a>
            <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
            <a class="text-gray-500">
            Home
            </a>
            <a class="ml-3 text-gray-500">
            Privacy Policy
            </a>
            <a class="ml-3 text-gray-500">
            Disclaimers
            </a>
            <a class="ml-3 text-gray-500">
            Terms and Conditions
            </a>
            </span>
         </div>
      </footer>
   </body>
</html>
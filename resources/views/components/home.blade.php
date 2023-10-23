<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Captcha --}}
        {{-- {!! NoCaptcha::renderJs() !!} --}}
        <script src="https://www.google.com/recaptcha/api.js?render=6LdbrsMoAAAAAAWG8cOd6vVIp4t49fjdF2tnvvyY"></script>

        <script>
            document.addEventListener('submit',function(e){
                e.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LdbrsMoAAAAAAWG8cOd6vVIp4t49fjdF2tnvvyY', {action: 'submit'}).then(function(token) {
                        let form = e.target;
                        let input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'response';
                        input.value = token;

                        form.appendChild(input);
                        form.submit();

                    });
                });
            });
        </script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="overflow-x-hidden">
        <div class="sticky top-0 z-50 font-sans text-gray-900 antialiased">
            <header class=""> 
                <div class="container z-50 max-w-screen-2xl w-full">
                    <nav class="flex items-center justify-between bg-violet-950 h-20 lg:gap-12 w-screen">
                        <a
                            href="#"
                            class="ml-2 h-16 inline-flex items-center gap-3 text-lg font-bold md:text-xl"
                        >
                            {{-- <div class="flex items-center justify-center w-20 h-20 rounded-lg shadow-lg border-y shadow-primary-700/20 bg-gradient-to-b from-primary-500 to-primary-600 border-t-primary-400 border-b-primary-700"
                                > --}}
                            <div class="w-36 flex items-center justify-center">
                                <img class="rounded-md" src="{{asset('img/logo.jpg')}}" alt="Cimad">
                               
                            </div>
                            
                            <span></span>
                        </a>
                    
                        <ul class="nav-links duration-500 z-10 absolute top-[-600%] left-0 w-full flex flex-col justify-items-center items-center bg-violet-950 text-base font-medium
                            md:bg-transparent md:mt-0 md:top-0 md:mr-8 md:w-fit md:flex-row md:items-start md:gap-8 md:relative">
                            <li class="w-full flex justify-center hover:bg-gray-50/20">
                                <a
                                class="relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                                href="#"
                                >Inicio</a>
                            </li>
                    
                            <li class="w-full flex justify-center hover:bg-gray-50/20">
                                <a
                                class="relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                                href="#"
                                >Servicios</a>
                            </li>
                    
                            <li class="w-full flex justify-center hover:bg-gray-50/20">
                                <a
                                class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                                href="#"
                                >Profesionales</a>
                            </li>     
                            <li class="w-full flex justify-center hover:bg-gray-50/20">
                                <a
                                class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                                href="#" target="_blank"
                                >Novedades</a>
                            </li>
                    
                            <li class="w-full flex justify-center hover:bg-gray-50/20">
                                <a
                                class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                                href="#"
                                >Contacto</a>
                            </li>
                            
                            <li
                                role="divider"
                                class="h-4 border-l border-gray-600"
                            ></li>
                     
                            
                        </ul>
                        <ul class="mr-4">
                        @if (Route::has('login'))
                            <div class="mr-6 hidden lg:flex">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-2 transition relative h-20 inline-flex items-center text-gray-300 hover:text-white">Register</a>
                                    @endif
                                @endauth
                            </div>
                            
                        @endif
                        </ul>
                        <div class="mr-6 lg:hidden">
                            <button
                                type="button"
                                onclick="onToggleMenu(this)"
                                class="flex items-center justify-center gap-3 p-2 pl-3 text-sm font-medium text-gray-200 bg-gray-500/50 rounded lg:hidden border-b-transparent border-y border-t-gray-600"
                            >
                                <span x-text="open ? 'X' : 'Menu'">Menu</span>
                        
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>            
                            </button>
                        </div>
                    </nav>
                </div>
                
            </header>
        </div>


        <main>
            {{ $slot }}
        </main>



        
        <footer
        class="flex flex-col items-center bg-neutral-200 text-center text-white dark:bg-neutral-600">
            <div class="container pt-9">
                <div class="mb-9 flex justify-center">

                    <a href="mailto:administracion@cimad.com.ar" class="mr-9 text-neutral-800 dark:text-neutral-200">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 75.546 78.738 H 14.455 C 6.484 78.738 0 72.254 0 64.283 V 25.716 c 0 -7.97 6.485 -14.455 14.455 -14.455 h 61.091 c 7.97 0 14.454 6.485 14.454 14.455 v 38.567 C 90 72.254 83.516 78.738 75.546 78.738 z M 14.455 15.488 c -5.64 0 -10.228 4.588 -10.228 10.228 v 38.567 c 0 5.64 4.588 10.229 10.228 10.229 h 61.091 c 5.64 0 10.228 -4.589 10.228 -10.229 V 25.716 c 0 -5.64 -4.588 -10.228 -10.228 -10.228 H 14.455 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 11.044 25.917 C 21.848 36.445 32.652 46.972 43.456 57.5 c 2.014 1.962 5.105 -1.122 3.088 -3.088 C 35.74 43.885 24.936 33.357 14.132 22.83 C 12.118 20.867 9.027 23.952 11.044 25.917 L 11.044 25.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 46.544 57.5 c 10.804 -10.527 21.608 -21.055 32.412 -31.582 c 2.016 -1.965 -1.073 -5.051 -3.088 -3.088 C 65.064 33.357 54.26 43.885 43.456 54.412 C 41.44 56.377 44.529 59.463 46.544 57.5 L 46.544 57.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 78.837 64.952 c -7.189 -6.818 -14.379 -13.635 -21.568 -20.453 c -2.039 -1.933 -5.132 1.149 -3.088 3.088 c 7.189 6.818 14.379 13.635 21.568 20.453 C 77.788 69.973 80.881 66.89 78.837 64.952 L 78.837 64.952 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 14.446 68.039 c 7.189 -6.818 14.379 -13.635 21.568 -20.453 c 2.043 -1.938 -1.048 -5.022 -3.088 -3.088 c -7.189 6.818 -14.379 13.635 -21.568 20.453 C 9.315 66.889 12.406 69.974 14.446 68.039 L 14.446 68.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(29,29,27); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="https://www.facebook.com/profile.php?id=100072643261712&mibextid=LQQJ4d" class="mr-9 text-neutral-800 dark:text-neutral-200" target="_blank">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#" class="mr-9 text-neutral-800 dark:text-neutral-200">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#" class="mr-9 text-neutral-800 dark:text-neutral-200">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                            d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                            fill-rule="evenodd"
                            clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/cimadnqn?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" class="mr-9 text-neutral-800 dark:text-neutral-200" target="_blank">
                        {{-- Instagram --}}
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    
                    
                </div>
            </div>

            <!--Copyright section-->
            <div
            class="w-full bg-neutral-200 p-4 text-center text-neutral-700 dark:bg-neutral-700 dark:text-neutral-200">
            © 2023 Copyright:
            <a
                class="float-right text-neutral-800 dark:text-neutral-400"
                href="#"
                >Rodrigo Suarez</a
            >
            </div>
        </footer>

        <script>
            const navLinks = document.querySelector('.nav-links');
            console.log(navLinks);
            function onToggleMenu(e){
                navLinks.classList.toggle("top-[-600%]");

                navLinks.classList.toggle('top-[100%]')
            }

        </script>
    </body>



</html>
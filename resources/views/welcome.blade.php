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

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <div class="sticky top-0 z-50 font-sans text-gray-900 antialiased">
            <header class=""> 
                <div class="container z-50 max-w-screen-2xl">
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
        <div class="w-screen flex items-center justify-center animate-[fadein_2s_ease-in_1] shadow-md">
                    
            {{-- <img class="rounded-md w-full" src="{{asset('img/trabajadores01.jpg')}}" alt=""> --}}
            <div class="relative">
                <img class="w-fit" src="{{asset('img/trabajadores01.jpg')}}" alt="">
                <div class="relative lg:absolute lg:top-20 lg:left-20 px-4 py-3 lg:w-2/5 bg-gray-100/50 rounded-lg shadow-xl">
                    <h2 class="font-bold text-xl">CIMAD Laboral, una nueva propuesta dentro de este centro especializado y
                         gran trayectoria en la ciudad.
                    </h2>
                    <br>
                    <p>- Nos especializamos en accidentologia  y medicina laboral.</p>
                    <p>- Brindamos soluciones integrales para el cuidado de la salud de los trabajadores.</p>  
                    <p>- Abarcando todas las especialidades y  necesidades para la atención del capital humano de nuestros clientes.</p>
                </div>
            </div>
        </div> 
        
        <div class="relative w-screen my-8 flex flex-col-reverse md:flex-row items-start animate-[fadein_2s_ease-in_1]">
            
            <div class="relative px-4 mx-4 md:ml-8 mt-8 py-3 lg:w-2/5 bg-gray-100/50 rounded-lg shadow-md">
                <a href="#">
                <h2 class="font-bold text-xl">MÉDICO EN PLANTA</h2>
                <br>

                <p>Contamos con profesionales especialistas en medicina laboral, además de un cuerpo de enfermeros experimentados y 
                    capacitados en el área, que nos permite brindarles a nuestros clientes el mejor servicio. El principal objetivo 
                    es la promoción y mantenimiento del más alto nivel de salud de los trabajadores, organizando, desarrollando y 
                    propugnando acciones preventivas, como así también la asistencia médica directa del trabajador.</p>
                </a>
            </div>
            <img class="relative rounded-md md:w-2/5 mt-8" src="{{asset('img/trabajadores02.png')}}" alt="">
            
        </div>
    
        <div class="w-screen p-4 flex flex-col md:flex-row bg-gray-200 items-start justify-center animate-[wiggle_2s_ease-in_1]">
            <img class="flex rounded-md md:w-2/5 mt-8" src="{{asset('img/laboratorio01.jpg')}}" alt="">
            <div class="flex relative px-4 mx-4 md:ml-8 mt-8 py-3 lg:w-2/5 bg-gray-100/50 rounded-lg shadow-lg">
                <a href="#">
                    <h2 class="font-bold text-xl">SERVICIOS</h2>
                    <br><p>
                    Gracias a la incorporación de equipamiento tecnológico, en nuestro centro realizamos estudios complementarios de diagnóstico:
                    <li>	Laboratorio Toxicológico y otras determinaciones </li>
                    <li>	Laboratorios clínicos de rutina </li>
                    <li>	Electrocardiograma y Ergometría </li>
                    <li>	Espirometria</li>
                    <li>	Electroencefalograma </li> 
                    <li>	Radiología </li>
                    <li>	Audiometría </li>
                    <li>	Exámenes Psicotécnicos </li>
                    <li>	Exámenes Psicométricos </li>
                    <li>	Informe socio ambiental laboral </li>
                    </p>
                </a>
            </div>
            
        </div>
        
        <footer class="container mt-8 ml-8 pb-8">
            <img class="w-20" src="{{asset('img/logo.jpg')}}" alt="">
            <p class="float-right text-violet-400"><a href="#">Inicio</a></p>
            <p>&copy; Cimad SAS, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
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
        
        
  

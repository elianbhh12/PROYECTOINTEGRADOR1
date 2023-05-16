<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        @vite('resources/css/app.css')

    </head>
    <body >
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
<br>
<br>    
            <div class="relative py-16 bg-gradient-to-br">  
                <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
                    <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
                        <div class="rounded-xl bg-white shadow-xl">
                            <div class="p-6 sm:p-16">
                                <div class="space-y-4">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logotipo_USTA_Colombia.gif" 
                                    loading="lazy" class="mx-auto w-36" alt="tailus logo">
                                    <h1 class="text-4xl font-bold  text-cyan-900 text-center mb-4">USTACOLLAB</h1>
                                    <p class="text-lg text-gray-700 text-center mb-8">Repositorio Exclusivo Facultad de Ingieneria De Telecomunicaciones</p>
                                </div>
                                <div class="mt-16 grid space-y-4">
                                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                        hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                        <div class="relative flex items-center space-x-4 justify-center">
                                            <i class="fa-solid fa-right-to-bracket absolute left-0 w-5"></i>
                                            
                                            <a class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition 
                                            duration-300 group-hover:text-blue-600 sm:text-base" href="{{ route("login") }}">Inicar Sesion</a>
                                        </div>
                                    </button>
                                    <button class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 
                                        hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                                        <div class="relative flex items-center space-x-4 justify-center">
                                            <i class="fa-solid fa-registered absolute left-0 w-5"></i>
                                            @if (Route::has('register'))
                                            <a type="button" class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition 
                                            duration-300 group-hover:text-blue-600 sm:text-base" href="{{ route("register") }}">Registrarse</a>
                                            @endif
                                        
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </body>
</html>

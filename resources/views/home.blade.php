@extends('layouts.app')

@section('content')

    <div class="flex  h-screen  ">
        <div class=" w-2/12 p-2 mx-10 flex  justify-center">
        <div class="Top Section">
            <div class="top-section flex space-x-4 mt-2 ">
            <a href="https://github.com/chriskappa">
                <img
                src="http://placekitten.com/200/300"
                alt=""
                class="w-8 h-8 rounded-full  "
            />
            </a>
            
            <div>
                <h3 class="font-bold">{{ Auth::user()->name }}</h3>
                <div class="flex space-x-2 items-center">
                </div>
            </div>
            </div>
            <div class="buttons-section mt-5 space-y-2  w-52">
            <button class="bg-purple-700 hover:bg-purple-500 w-full border border-black text-gray-100 text-sm p-1 rounded">
                Create Project
            </button>
            <button class="bg-white hover:bg-gray-200 hover:border-black border-2 w-full text-black font-semibold text-sm p-1 rounded">
                Invite Team
            </button>
            </div>
            
            <div class="footer-Section mt-5 ">
            <div class="flex space-x-2 text-gray-500 cursor-pointer font-semibold hover:text-gray-700 ">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
                >
                <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"
                />
                </svg>
                <h3>Pro Member</h3>
            </div>
            <div class="flex space-x-2 text-gray-500 mt-2 cursor-pointer hover:text-gray-700  font-semibold">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
                >
                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                </svg>
                <h3>8 Projects</h3>
            </div>
            </div>
        </div>
        </div>
        
        <div class="  mx-5 w-11/12 ">
        <div class=" ">
            <div class="top-section flex justify-between  mt-4 items-center pb-2 border-b border-gray-400 ">
            <h1 class="font-bold">Projects</h1>
            <div class="bg-white border-2 w-28 p-1 text-gray-700 font-semibold rounded flex justify-around items-center">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
                >
                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                </svg>
                <h3>Sort</h3>
                <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                viewBox="0 0 20 20"
                fill="currentColor"
                >
                <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                />
                </svg>
            </div>
            </div>
            
            <div class="middle-hero-section">
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-green-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
                
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-yellow-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
            
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-red-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
            
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-green-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
            
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-yellow-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
        
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-green-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
                
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-yellow-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
                
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-red-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
                
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-green-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
                
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-green-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>
                
                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="hero-section border-b-2  py-5 flex flex-col justify-center ">
                <div class="hero-section-content flex  justify-between  my-1">
                <div class="flex items-center space-x-2">
                    <p class="bg-green-500 w-2 h-2 rounded-full"></p>
                    <h3 class="font-semibold">Workcation</h3>
                </div>
                <div class="flex items-center space-x-2">
                    <h3 class="font-semibold">Visit Site</h3>
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-600"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                </div>

                <div class="flex items-center justify-between">
                <div class="left-side flex space-x-2 items-center text-gray-400 font-semibold text-xs">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                        clip-rule="evenodd"
                    />
                    </svg>
                    <h3>debbielewis/workcation </h3>
                </div>
                <div class="right-side">
                    <ul class="text-xs text-gray-400 font-semibold items-center flex space-x-2">
                    <li>
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                        />
                        </svg>
                    </li>
                    <li>Laravel</li>
                    <li>Last Deploy 3h ago</li>
                    <li>United States</li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        
        <div class="  w-3/12 px-7 p-2">
        <h1 class="font-semibold">Active Feed</h1>
        <div class="div-container flex justify-center  space-x-2 mb-5 mt-2 ">
            <img
            src="http://placekitten.com/300/300"
            alt=""
            class="w-8 h-8 rounded-full   "
            />
            <div>
            <div class="flex justify-between">
                <h3 class="font-bold text-black">You</h3>
                <h3>3h ago</h3>
            </div>
            <p class="text-justify text-gray-400 font-base ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                cupiditate ipsam illo reiciendis tempore, omnis laboriosam dicta
                ea vero est.
            </p>
            </div>
        </div>
        <div class="div-container flex justify-center  space-x-2 mb-5 mt-2 ">
            <img
            src="http://placekitten.com/300/305"
            alt=""
            class="w-8 h-8 rounded-full   "
            />
            <div>
            <div class="flex justify-between">
                <h3 class="font-bold text-black">Tenya Pena</h3>
                <h3>3h ago</h3>
            </div>
            <p class="text-justify text-gray-400 font-base  ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                cupiditate ipsam illo reiciendis tempore, omnis laboriosam dicta
                ea vero est.
            </p>
            </div>
        </div>
        <div class="div-container flex justify-center  space-x-2 mb-5 mt-2 ">
            <img
            src="http://placekitten.com/300/299"
            alt=""
            class="w-8 h-8 rounded-full   "
            />
            <div>
            <div class="flex justify-between">
                <h3 class="font-bold text-black">Mickey</h3>
                <h3>3h ago</h3>
            </div>
            <p class="text-justify text-gray-400 font-base  ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                cupiditate ipsam illo reiciendis tempore, omnis laboriosam dicta
                ea vero est.
            </p>
            </div>
        </div>
        <div class="div-container flex justify-center  space-x-2 mb-5 mt-2 ">
            <img
            src="http://placekitten.com/300/310"
            alt=""
            class="w-8 h-8 rounded-full   "
            />
            <div>
            <div class="flex justify-between">
                <h3 class="font-bold text-black">Mike</h3>
                <h3>3h ago</h3>
            </div>
            <p class="text-justify text-gray-400 font-base ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                cupiditate ipsam illo reiciendis tempore, omnis laboriosam dicta
                ea vero est.
            </p>
            </div>
        </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VBA Game</title>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{--<livewire:styles />
    <livewire:scripts />--}}
</head>

<body class="container bg-gray-50 mx-auto place-content-center		">

<!-- component -->
<div class="flex flex-col flex-auto bg-gray-50 text-gray-800">
    <div class="flex flex-col w-64 bg-gray-900 h-full shadow-lg">
        <div class="flex-grow">
            <ul class="flex flex-col py-6">
                {{--Home/Profile--}}
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </span>
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Profile</span>
                    </a>
                </li>
                {{-- Kapitel--}}
                <li class="px-5">
                    <div class="flex flex-row items-center h-8">
                        <div class="flex font-semibold text-sm text-gray-300 my-4 font-sans uppercase">Kapitel</div>
                    </div>
                </li>
                {{--unterkapitel--}}
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">VBA Basics</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Variablen</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Loops</span>
                    </a>
                </li>
                {{--Logout--}}
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 text-gray-500 hover:text-gray-200 border-l-4 border-transparent hover:border-red-500 pr-6">
                <span class="inline-flex justify-center items-center ml-4 text-red-400">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </span>
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


</body>

</html>

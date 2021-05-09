<!-- component -->
<div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
    <div class="flex flex-col top-0 left-0 w-64 bg-gray-900 h-full shadow-lg">
        <div class="flex items-center pl-6 h-32	 border-b border-gray-800">
            <img src="" alt="" class="rounded-full h-10 w-10 flex items-center justify-center mr-3 border-2 border-blue-500">
            <div class="ml-1">
                <p class="ml-1 text-md font-medium tracking-wide truncate color-slime font-sans">JED DYLAN LEE</p>
                <div class="badge">
                    <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-800 bg-gray-400 rounded-full">Lv {{$lv}}</span>
                </div>
                {{--lv width gibt an wie voll die progressbar ist.--}}
                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-pink-200">
                        <div style="width:{{$exp}}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <ul class="flex flex-col py-6 space-y-1">
                {{--Home/Profile--}}
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 color-slime hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </span>
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 color-slime hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Profile</span>
                    </a>
                </li>
                {{-- Kapitel--}}
                <li class="px-5">
                    <div class="flex flex-row items-center h-8">
                        <div class="flex font-semibold text-sm h-color my-4 font-sans uppercase">Kapitel</div>
                    </div>
                </li>
                {{--unterkapitel--}}
                <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 color-slime hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                            <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">VBA Basics</span>
                        </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 color-slime hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Variablen</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 color-slime hover:text-gray-200 border-l-4 border-transparent hover:border-blue-500 pr-6">
                        <span class="ml-2 font-semibold text-sm tracking-wide truncate font-sans">Loops</span>
                    </a>
                </li>
                {{--Logout--}}
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-700 color-slime hover:text-gray-200 border-l-4 border-transparent hover:border-red-500 pr-6">
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

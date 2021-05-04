<!-- component -->
        <div class="align-middle border-b border-gray-800">
            <img src="" alt="" class="rounded-full h-10 w-10 flex items-center justify-center mr-3 border-2 border-blue-500">
            <div class="ml-1">
                <p class="ml-1 text-md font-medium tracking-wide truncate text-gray-100 font-sans">JED DYLAN LEE</p>
                <div class="badge">
                    <span class="px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-800 bg-blue-100 rounded-full">Lv {{$lv}}</span>
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



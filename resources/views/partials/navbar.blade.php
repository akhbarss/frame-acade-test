<nav class="flex items-center py-[4px] px-[10px] border justify-between">
    <div class="flex items-center">

        {{-- LOGO --}}
        <a href="#" class="flex items-center">
            <img src="Logo-FrameAcade.png" alt="" width="50">

            {{-- DIVIDER --}}
            <div class="w-[2px] bg-black h-[35px] ml-[0.5rem]"></div>
            <div class="flex flex-col  font-bold ml-[0.5rem]">
                <h2 class="leading-4">Frame</h2>
                <h2 class="ml-[13px] text-[#F6B21B] ">Acade</h2>
            </div>
        </a>

        {{-- INPUT --}}
        <div class="relative hidden md:block ml-[2rem] w-[18rem]">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search Input</span>
            </div>
            <input type="text" id="search-navbar"
                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-[20px] bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Find a framework">
        </div>
    </div>

    <div class="flex items-center gap-[1rem]">

        <img src="/image/search.png" alt="" height="50" width="35" class="md:hidden cursor-pointer">
        
        <!-- drawer init and toggle -->
        <img src="/image/gray-progress.png" alt="" height="50" width="35"
            data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
            data-drawer-placement="right" aria-controls="drawer-right-example" class="cursor-pointer">

        {{-- AVATAR --}}
        {{-- <button  id="dropdownDefaultButton" data-dropdown-toggle="dropdownHover"> --}}

        <div data-dropdown-toggle="dropdown" data-dropdown-trigger="hover"
            class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full cursor-pointer">
            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                </path>
            </svg>
        </div>

    </div>
    {{-- </button> --}}

    {{-- DROPDOWN --}}
    <div id="dropdown"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[15rem] ">

        {{-- HEAD --}}
        <div class="head flex p-[10px] gap-[10px]">
            {{-- AVATAR --}}
            <div class="relative w-[55px] h-[50px] overflow-hidden bg-gray-100 rounded-full ">
                <svg class="absolute w-[58px] h-[65px] text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </div>
            <div class="flex flex-col">

                <span class="font-bold text-[14px] leading-[16px] ">Muhammad Akhbar Firdaus</span>
                <span class="text-[12px] text-gray-500 ">akbar@gmailcom</span>
            </div>
        </div>

        {{-- BODY --}}
        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton">
            <li>
                <a href="/notifications"
                    class="block px-4 py-2 hover:bg-gray-100">Notifications</a>
            </li>
            <li>
                <a href="/certifications"
                    class="block px-4 py-2 hover:bg-gray-100">Certifications</a>
            </li>
            <li>
                <a href="/sign-in"
                    class="block px-4 py-2 hover:bg-gray-100">Logout</a>
            </li>
        </ul>
    </div>
</nav>

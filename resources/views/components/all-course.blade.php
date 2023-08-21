    <section class="course flex flex-col w-[50rem] max-w-[53rem] relative h-[35rem] max-mg:mx-auto">
        <div class="relative">
            <h1 class="font-bold text-[24px]">
                Welcome back,
            </h1>
            <h1 class="font-bold text-[24px]">
                Muhammad Akhbar Firdaus.
            </h1>
        </div>
        <span class="text-[20px] mt-[1.5rem] mb-[1rem]">
            Top framework
        </span>

        {{-- SCROLL AREA --}}
        <div id="scrollContainerCourse"
            class="
            scroll-area
            h-[50rem]
            flex flex-col gap-[1rem] overflow-auto pr-[0.5rem] 
            scrollbar-thin 
            scrollbar-thumb-rose-500
            scrollbar-track-slate-700
            scrollbar-track-rounded-full
            scrollbar-thumb-rounded-full
            scrollbar-corner-rounded-full
            scrollbar-h-3
            scrollbar-w-10
            {{-- relative --}}
            transition-shadow duration-300 ease-in-out
            mm:pr-[1rem]
            ">

            @foreach ($framework as $item)
                {{-- CARD --}}
                <a href="/#"
                    class="
                    card
                    flex
                    flex-col
                    items-center
                    border
                    border-gray-200
                    rounded-lg
                    shadow-md
                    hover:bg-gray-100
                    hover:shadow-lg
                    {{-- h-[2rem] --}}
                    mm:h-[130px]
                    mm:flex-row
                    mm:items-stretch
                    
                    ">
                    {{-- IMAGE --}}
                    <div class="image flex rounded-[20px]  mx-[1rem] h-[8rem] w-[100px] min-w-[100px] max-w-[100px] ">
                        {{-- <h1 class="font-bold">{{ $item['image'] }}</h1> --}}
                        <img src="{{ $item['image'] }}" class="m-auto">
                    </div>

                    {{-- DIVIDER --}}
                    <div class="w-[2px] bg-black mm:h-[100px] my-auto"></div>

                    {{-- TITLE --}}
                    <div class="ml-[10px] flex flex-col ">
                        <h1 class="font-bold text-[24px]">{{ $item['title'] }}</h1>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </a>
            @endforeach

        </div>
    </section>

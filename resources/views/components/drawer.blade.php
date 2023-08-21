{{-- @dd($progress, $framework) --}}

<section class="flex flex-col     ">

    @if (empty($progress))
        <div class="flex flex-col items-center justify-center my-auto gap-[3rem] px-[2rem] h-[35rem]">
            <img src="/image/0progress.png" alt="0progress">
            <h1 class="font-extrabold ml-[2rem] text-[20px] ">Seem’s you have not started course anything, let’s learn!
            </h1>
        </div>
    @else
        <div id="scrollContainerProgress" data-accordion="collapse"
            class=" transition-shadow duration-300  pr-[10px] overflow-auto flex flex-col h-[35rem] gap-[1rem] ease-in-out scrollbar-thin scrollbar-thumb-rose-500 scrollbar-track-slate-700 scrollbar-track-rounded-full scrollbar-thumb-rounded-full scrollbar-corner-rounded-full scrollbar-h-3 scrollbar-w-10
            ">

            @foreach ($progress as $item)
                <div id="accordion-collapse-heading-{{ $item['id'] }}-{{ $item['id'] }}" class=" border-b-2 ">
                    <button type="button"
                        class="flex bg-[#3d4f62] items-center  justify-between w-[200px] py-[0.5rem] px-[1.5rem] font-medium text-left text-white border border-b-0 border-gray-200 rounded-t-xl  hover:bg "
                        data-accordion-target="#accordion-collapse-body-{{ $item['id'] }}-{{ $item['id'] }}"
                        aria-expanded="true"
                        aria-controls="accordion-collapse-body-{{ $item['id'] }}-{{ $item['id'] }}">
                        <span>{{ $item['lang'] }}</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                    <div id="accordion-collapse-body-{{ $item['id'] }}-{{ $item['id'] }}" class="border "
                        aria-labelledby="accordion-collapse-heading-{{ $item['id'] }}-{{ $item['id'] }}">
                        <ul class="BODY_PROGRESS_CARD p-[0.5rem] flex flex-col gap-[1rem] ">

                            @foreach ($item['frameworks'] as $framework => $info)
                                <li class="INNER_CARD flex  p-[0.5rem] border rounded-[10px] gap-[1rem]">
                                    <div class="flex-[5] flex flex-col gap-[1rem] ">
                                        <div class="flex items-center gap-[1rem]">
                                            <img src="{{ $info['image'] }}" alt="" width="50">
                                            <h1 class="font-bold text-[20px]">{{ $framework }}</h1>
                                        </div>
                                        <div class=" bg-gray-200 rounded-full h-2.5">
                                            <div class="h-2.5 rounded-full"
                                                style="background-color: {{ $info['color'] }}; width: {{ $info['progress'] }}%">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="
                            flex-[2]
                            flex
                            items-center
                            justify-end
                            font-bold
                            text-[20px]
                            ">
                                        {{ $info['progress'] }}%
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            @endforeach


            {{-- ################################################# --}}
        </div>


    @endif

</section>

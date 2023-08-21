{{-- @dd($courses, $recent); --}}

<x-app-layout>
    <x-slot name="header" class="fixed">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome Back,') }} {{ Auth::user()->username . '!' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (!empty($recent))
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1 class="p-6 text-gray-900 text-3xl font-semibold">
                        {{ __('Recent Course') }}
                    </h1>
                    <div class="p-6">
                        <div class="border border-gray-500 p-5 rounded-lg">
                            <div class="flex gap-3 items-center">
                                <div class="h-5 w-5 bg-gray-400 rounded-full "></div>
                                <div class="flex-1">
                                    <div class="text-lg"> {{ $recent->name }} </div>
                                    <div class="text-sm">
                                        {{ $recent->description }}
                                    </div>
                                    <div class="flex justify-between mb-1 mt-3">
                                        <span class="text-sm font-medium text-black">Progress</span>
                                        <span class="text-sm font-medium text-black">{{ ($recent->done / $recent->total)*100 }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-2.5 rounded-full"
                                            style="width: {{ ($recent->done / $recent->total) * 100 }}%"></div>
                                    </div>
                                </div>
                                <a href="{{ url('/learn/' . $recent->id) }}"
                                    class="inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Continue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ($courses->isEmpty())
                <div class="bg-white shadow-sm sm:rounded-lg mt-3 px-[2rem] py-[4rem]  flex flex-col ">
                    <img src="/image/0progress.png" alt="0 progress" class="mx-auto pr-[3rem] min-w-[20rem] ">
                    <h1 class="p-6 text-gray-900 text-3xl font-semibold mt-10 mx-auto">
                        Seem’s you have not started course anything, let’s learn!
                    </h1>
                </div>
            @else
                <div class="bg-white shadow-sm sm:rounded-lg mt-5">
                    <h1 class="p-6 text-gray-900 text-3xl font-semibold">
                        {{ __('All Enrolled Courses') }}
                    </h1>
                    <div class="p-6">
                        @foreach ($courses as $course)
                            <div class="mt-5">
                                <div class="border border-gray-500 p-5 rounded-lg">
                                    <div class="flex gap-3 items-center">
                                        <div class="h-5 w-5 bg-gray-400 rounded-full "></div>
                                        <div class="flex-1">
                                            <div class="text-lg"> {{ $course->name }} </div>
                                            <div class="text-sm">
                                                {{ $course->description }}
                                            </div>
                                            <div class="flex justify-between mb-1 mt-3">
                                                <span class="text-sm font-medium text-black">Progress</span>
                                                <span
                                                    class="text-sm font-medium text-black">{{ ($course->done / $course->total) * 100 }}%</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                                <div class="bg-blue-600 h-2.5 rounded-full"
                                                    style="width: {{ ($course->done / $course->total) * 100 }}%"></div>
                                            </div>
                                        </div>
                                        <a href="{{ url('/learn/' . $course->id) }}"
                                            class="inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                            Continue
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

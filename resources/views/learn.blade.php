<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __($course->name) }}
                </h2>
                <h1>{{ $course->description }}</h1>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg mt-5">
                <div class="p-6">
                    @foreach($course->modules as $module)
                        <p class="w-full text-lg px-4 py-5 font-bold bg-gray-400 border border-gray-300">{{ $module->name }}</p>
                        <ul class="w-full text-sm font-medium bg-white border border-gray-300">
                            @foreach($module->subModules as $submodule)
                                <li class="w-full px-4 py-2 border-b border-gray-300 flex items-center justify-between">
                                    <span>{{$submodule->name}}</span>
                                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-sm font-semibold text-white bg-gray-100 rounded-full" style="background-color: {{ isset($submodule->user_courses->done_at) ? "green" : "gray"}}">
                                      <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"  viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                                      </svg>
                                      <span class="sr-only">Icon description</span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.main')

@section('container')
    <div class="flex h-[100vh]">

        {{-- SECTION LEFT --}}
        <section class="flex-[1] bg-[#697899] flex flex-col text-white items-center justify-center ">
            <h1 class="text-[40px] mb-[3rem]">Let’s start learn with <br> Frame Acade!</h1>
            <div class="flex items-center mr-[2rem]">
                <img src="image/frameacade.png" alt="" width="200">
                {{-- DIVIDER --}}
                <div class="w-[4px] bg-white h-[125px] ml-[0.5rem]"></div>
                <div class="flex flex-col  font-extrabold ml-[2rem]">
                    <h1 class=" text-[46px]">Frame</h1>
                    <h1 class="ml-[13px] text-[#F6B21B] text-[46px]">Acade</h1>
                </div>
            </div>
        </section>

        {{-- SECTION RIGHT --}}
        <section class="flex-[1] flex flex-col items-center justify-center gap-[3rem]">

            <div class="font-extrabold text-[38px] text-[#445069]">
                <h1>Sign in to</h1>
                <div class="flex">
                    <h1>Frame</h1>
                    <h1 class="text-[#F6B21B]"> Acade</h1>
                </div>
            </div>

            <form action="" class="flex flex-col  items-center ">
                <div>
                    <label for="input-group-1" class=" block mb-2 text-sm font-medium text-gray-900">Your
                        Email</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input type="text" id="input-group-1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                            placeholder="name@flowbite.com">
                    </div>
                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900">Your
                        Password</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path
                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                <path
                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                            </svg>
                        </div>
                        <input type="text" id="input-group-1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                            placeholder="name@flowbite.com">
                    </div>
                </div>
                {{-- SIGNUP --}}
                <a href="/sign-up">sign up account</a>
            </form>



        </section>

    </div>
@endsection

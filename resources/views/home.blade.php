{{-- @dd($framework) --}}

@extends('layouts.main')

@section('container')
    <div class=" flex pl-[2rem] pr-[2rem] py-[1rem] h-[90vh] mg:pr-[2rem] max-mg:px-[10rem] max-md:px-[5rem] max-sm:px-[2rem]">
        @include('components.all-course')
        @include('components.progress')
        {{-- @include('components.hidden') --}}
    </div>
@endsection

@extends('layout')
@section('content')

<div class=" p-10  ">
    <div class="w-full  p-10  flex gap-5 ">
        <div class="flex flex-1">
            <livewire:public.post-section />

        </div>
    </div>
    <livewire:public.top-courses />
</div>
@include('footer')

@endsection
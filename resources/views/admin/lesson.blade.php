@extends('admin.adminlayout')
@section('content')
<div class=" flex flex-1 gap-10 px-[5%]">
    <div class=" w-4/12 mt-10">
        <h2 class="text-2xl font-bold text-white">Add New Lesson</h2>
        <livewire:admin.lesson.insert-lesson />
    </div>
    <div class="w-8/12">
        <livewire:admin.lesson.calling-lesson/>
    </div>

</div>
@endsection
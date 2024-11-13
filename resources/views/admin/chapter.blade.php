@extends('admin.adminlayout')
@section('content')
<div class=" flex flex-1 gap-10 px-[5%]">
    <div class=" w-4/12 mt-10">
        <h2 class="text-2xl font-bold text-white">Add New Chapter</h2>
        <livewire:admin.chapter.insert-chapter />
    </div>
    <div class="w-8/12">
        <livewire:admin.chapter.calling-chapter />
    </div>

</div>
@endsection
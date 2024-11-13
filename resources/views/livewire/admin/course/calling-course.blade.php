<div>
    <div class=" flex flex-1 justify-between items-center py-5">
        <h2>Manage Topics</h2>
        <input type="text" wire:model.live="search" placeholder=" Search Here..." class=" border px-3 py-2 rounded text-black">

    </div>
    <div class=" grid grid-cols-6 gap-4 w-full">
        <div class=" flex-1">Id</div>
        <div class=" flex-1">Course Title</div>
        <div class=" flex-1">Description</div>
        <div class=" flex-1">Author</div>
        <div class=" flex-1">Image</div>
        <div class=" flex-1">Actions</div>

        @foreach($courses as $course)
        <div class=" flex-1">{{$course->id}}</div>
        <div class=" flex-1">{{$course->course_title}}</div>
        <div class=" flex-1">{{$course->description}}</div>
        <div class=" flex-1">{{$course->author}}</div>
        <div class=" flex-1">{{$course->image}}</div>
        <div class=" ">
           
            <button wire:confirm="Are you sure want to delete this course?" wire:click="deleteCourse({{$course->id}})"class=" text-red-500">Delete</button>
        </div>
        @endforeach

    </div>
</div>
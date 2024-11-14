<div>
    <div>
        <div class=" flex flex-1 justify-between items-center py-5">
            <h2>Manage Lessons</h2>
            <input type="text" wire:model.live="search" placeholder=" Search Here..." class=" border px-3 py-2 rounded text-black">

        </div>
        <div class=" grid grid-cols-5 gap-4 w-full">
            <div class=" flex-1">Id</div>
            <div class=" flex-1">Lesson Title</div>
            <div class=" flex-1"> Lesson Description</div>
            <div class=" flex-1">Chapter Title</div>

            <div class=" flex-1">Actions</div>


            @foreach($lessons as $lesson)
            <div class=" flex-1">{{$lesson->id}}</div>
            <div class=" flex-1">{{$lesson->lesson_title}}</div>
            <div class=" flex-1">{{$lesson->lesson_desc}}</div>
            <div class=" flex-1">{{$lesson->chapter_title}}</div>

            <div class=" ">

                <button wire:confirm="Are you sure want to delete this lesson?" wire:click="deleteLesson({{$lesson->id}})" class=" text-red-500">Delete</button>
            </div>
            @endforeach

        </div>
    </div>
</div>
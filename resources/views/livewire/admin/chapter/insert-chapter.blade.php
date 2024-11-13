<div>
    <div>
        <form wire:submit.prevent="store">

            <div class="mt-4">
                <label for="title" class="block text-lg font-semibold text-gray-700 text-white">Chapter Title</label>
                <input type="text" wire:model="chapter_title" id="title" class="w-full  text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                @error('chapter_title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>


            <div class="mb-4">
                <label for="chapter_desc" class="block text-lg font-semibold text-gray-700 text-white">Chapter Description</label>
                <textarea wire:model="chapter_desc" id="description" rows="3" class="w-full text-black border-gray-300 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1"></textarea>
                @error('chapter_desc') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="course_id" class="block text-lg font-semibold text-gray-700 text-white">Course Title</label>
                <select wire:model="course_id" id="course_id" class="w-full text-black border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                    <option value="">Select a topic</option>
                
                    @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->course_title}}</option>
                    @endforeach
                   

                </select>
                @error('course_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Submit</button>
            </div>

        </form>

    </div>
</div>
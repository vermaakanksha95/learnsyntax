<div>
    <div>
        <form wire:submit.prevent="store">

            <div class="mt-4">
                <label for="title" class="block text-lg font-semibold text-gray-700 text-white">Lesson Title</label>
                <input type="text" wire:model="lesson_title" id="title" class="w-full  text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                @error('lesson_title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>


            <div class="mb-4">
                <label for="lesson_desc" class="block text-lg font-semibold text-gray-700 text-white">Lesson Description</label>
                <textarea wire:model="lesson_desc" id="description" rows="3" class="w-full text-black border-gray-300 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1"></textarea>
                @error('lesson_desc') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="chapter_id" class="block text-lg font-semibold text-gray-700 text-white">Chapter Title</label>
                <select wire:model="chapter_id" id="chapter_id" class="w-full text-black border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
                    <option value="">Select a chapter</option>

                    @foreach($chapters as $chapter)
                    <option value="{{$chapter->id}}">{{$chapter->chapter_title}}</option>
                    @endforeach


                </select>
                @error('chapter_id') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Submit</button>
            </div>

        </form>

    </div>
</div>
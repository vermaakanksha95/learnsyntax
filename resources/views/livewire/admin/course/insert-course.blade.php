<div>
    <form wire:submit.prevent="save">

        <div class="mt-4">
            <label for="title" class="block text-lg font-semibold text-gray-700 text-white">Course Title</label>
            <input type="text" wire:model="course_title" id="title" class="w-full  text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
            @error('course_title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>


        <div class="mb-4">
            <label for="description" class="block text-lg font-semibold text-gray-700 text-white">Description</label>
            <textarea wire:model="description" id="description" rows="3" class="w-full text-black border-gray-300 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="author" class="block text-lg font-semibold text-gray-700 text-white">Author</label>
            <input type="text" wire:model="author" id="author" class="w-full text-black border-slate-400 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">
            @error('author') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="image" class="block text-lg font-semibold text-gray-700 text-white">Image</label>
            <input type="file" wire:model.live="image" id="image" class="w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 px-4 py-2 mt-1">

        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Submit</button>
        </div>

    </form>

</div>
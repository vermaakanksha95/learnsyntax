<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Chapter;
use App\Models\Lesson;
use Livewire\Component;

class InsertLesson extends Component
{
    public $lesson_title;
    public $lesson_desc;
    public $chapter_id;

    public function rules()
    {
        return [

            'lesson_title' => 'required|max:255',
            'lesson_desc' => 'required',
            'chapter_id' => 'required|numeric'
        ];
    }

    public function store()
    {
        $this->validate();
        $lesson = new Lesson();
        $lesson->lesson_title = $this->lesson_title;
        $lesson->lesson_desc = $this->lesson_desc;
        $lesson->chapter_id = $this->chapter_id;

        $lesson->save();
        $this->reset("lesson_title", "lesson_desc", "chapter_id");
        return redirect()->route("admin.lesson");

        $this->dispatch('lesson created');
    }

    public function render()
    {
        $data['chapters'] = Chapter::all();
        return view('livewire.admin.lesson.insert-lesson', $data);
    }
}

<?php

namespace App\Livewire\Admin\Chapter;

use App\Models\Chapter;
use App\Models\Course;
use Livewire\Component;

class InsertChapter extends Component
{
    public $chapter_title;
    public $chapter_desc;
    public $course_id;

    public function rules(){
        return[

            'chapter_title' =>'required|max:255',
            'chapter_desc' =>'required',
            'course_id' =>'required|numeric'
        ];
    }

    public function store(){
        $this->validate();
        $chapter = new Chapter();
        $chapter->chapter_title = $this->chapter_title;
        $chapter->chapter_desc = $this->chapter_desc;
        $chapter->course_id = $this->course_id;

        $chapter->save();
        $this->reset("chapter_title","chapter_desc","course_id");
        return redirect()->route("admin.chapter");

        $this->dispatch('chapter created');
    }

    public function render()
    {
        $data['courses'] = Course::all();
        return view('livewire.admin.chapter.insert-chapter',$data);
    }
}

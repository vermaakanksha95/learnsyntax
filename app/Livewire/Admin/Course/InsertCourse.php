<?php

namespace App\Livewire\Admin\Course;

use Livewire\WithFileUploads;

use App\Models\Course;
use Livewire\Component;

class InsertCourse extends Component
{
    use WithFileUploads;
    public $course_title;
    public $description;
    public $image;
    public $author;

    public function save(){
        $course = new Course();
        $course->course_title = $this->course_title;
        $course->description = $this->description;
        $course->author = $this->author;

        if ($this->image) {
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->move(public_path('images'), $imageName);
            $course->image = $imageName;
        }
        $course->save();

        $this->course_title = '';
        $this->description = '';
        $this->author = '';
        $this->image ='';

        $this->dispatch('course created');

        session()->flash('message','Course created successfully!');
        

    }



    public function render()
    {
        return view('livewire.admin.course.insert-course');
    }
}

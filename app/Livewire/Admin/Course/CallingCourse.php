<?php

namespace App\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Attributes\On;
use Livewire\Component;

class CallingCourse extends Component
{
    public $search = "";
    

    public function deleteCourse($id){
        $course = Course::findOrfail($id);
        $course->delete();
        session()->flash('message','Course deleted successfully');
    }
    #[On('course created')]

    public function render()
    {
        $data['courses'] = Course::where('course_title','LIKE',"%".$this->search ."%")->get();
        return view('livewire.admin.course.calling-course',$data);
    }
}

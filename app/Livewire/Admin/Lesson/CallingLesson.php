<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Lesson;
use Livewire\Attributes\On;
use Livewire\Component;

class CallingLesson extends Component
{
    public $search = "";
    public function deleteLesson($id)
    {
        Lesson::find($id)->delete();
        session()->flash('message', 'Lesson deleted successfully');
    }
    #[On('lesson created')]
    public function render()
    {
        $data['lessons'] = Lesson::where('lesson_title', 'LIKE', "%" . $this->search . "%")->get();
        return view('livewire.admin.lesson.calling-lesson', $data);
    }
}

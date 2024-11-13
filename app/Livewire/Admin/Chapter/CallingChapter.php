<?php

namespace App\Livewire\Admin\Chapter;

use App\Models\Chapter;
use Livewire\Attributes\On;
use Livewire\Component;

class CallingChapter extends Component
{
    public $search = "";
    public function deleteChapter($id)
    {
        Chapter::find($id)->delete();
        session()->flash('message', 'Chapter deleted successfully');
    }
    #[On('chapter created')]
    public function render()
    {
        $data['chapters'] = Chapter::where('chapter_title','LIKE',"%".$this->search."%")->get();
        return view('livewire.admin.chapter.calling-chapter',$data);
    }
   
}

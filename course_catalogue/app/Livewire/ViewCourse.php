<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Details")]
class ViewCourse extends Component
{

    public $courseId;
    public $course;

    function mount($courseId){
        $this->courseId = $courseId;
        $this->course = Course::find($courseId);
    }
    public function render()
    {
        $course = $this->course;
        return view('livewire.view-course',compact('course'));
    }
}

<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Semester;


#[Title("Home")]
class Welcome extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedLevels = [];
    public $selectedSemester = '';


    public function render()
    {
        $courses = $courses = $this->searchCourses();


        return view('livewire.welcome', compact('courses'));
    }


    public function triggerSearch()
    {

        $this->searchCourses();
    }

    public function searchCourses()
    {
        return Course::when($this->selectedLevels, function ($query) {
            $query->whereIn('level_id', $this->selectedLevels);
        })
        ->where(function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%')
                  ->orWhereHas('semester', function ($subquery) {
                      $subquery->where('name', 'like', '%' . $this->search . '%');
                  });
        })
        // ->orderBy('id', 'desc')
        ->paginate(20);
    }
}

<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class ListTeacher extends Component
{
    use WithPagination;
    public $teachers;
    public function mount()
    {
        $this->teachers = Teacher::all();
    }

    public function delete($id): void
    {
        $teacher = Teacher::find($id);

        if ($teacher) {
            $teacher->delete();
            $this->teachers = Teacher::all(); // Refresh the list after deletion
            session()->flash('message', 'Teacher deleted successfully.');
        }
    }

    public function render()
    { // Fetch the students with pagination
        $teacher = Teacher::paginate(10);
        return view('livewire.admin.teacher.list-teacher',[
        'teacher'=> $teacher]);
    }
}

<?php

namespace App\Livewire\Admin\Students;

use App\Models\User;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class ListStudent extends Component
{
    use WithPagination, LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public function delete($studentId): void
    {
        try {
            $student = User::where('student_id', $studentId)->firstOrFail();
            Log::info('Student to delete:', ['student' => $student]);
            User::where('id', $student->id)->delete();

            $this->alert('success', 'Success', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Student Deleted Successfully',
                'timerProgressBar' => true,
            ]);

            $this->resetPage();
        } catch (Exception $e) {
            $this->alert('error', 'Error', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Failed to delete student.',
                'timerProgressBar' => true,
            ]);
            Log::error('Delete student failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $students = User::paginate(10);

        return view('livewire.admin.students.list-student', [
            'students' => $students,
        ]);
    }
}

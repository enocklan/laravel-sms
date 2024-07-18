<?php
// ListStudent.php

namespace App\Livewire\Admin\Students;

use App\Models\User;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log; // Import the Log facade

class ListStudent extends Component
{
    use WithPagination, LivewireAlert;

    public function delete($studentId): void
    {
        try {
            // Find the student by student_id
            $student = User::where('student_id', $studentId)->firstOrFail();

            // Log to verify we have the correct student
            Log::info('Student to delete:', ['student' => $student]);

            // Use the primary id (UUID) to delete the student
            User::where('id', $student->id)->delete();

            // Show success message
            $this->alert('success', 'Success', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Student Deleted Successfully',
                'timerProgressBar' => true,
            ]);

            // Refresh the Livewire component to update the student list
            $this->resetPage();
        } catch (Exception $e) {
            // Handle any exceptions, log them, or show an error message
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
        // Fetch the students with pagination
        $students = User::paginate(10);

        return view('livewire.admin.students.list-student', [
            'students' => $students,
        ]);
    }
}

<?php

namespace App\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ListTeacher extends Component
{
    use WithPagination, LivewireAlert;

    protected $paginationTheme = 'bootstrap';


    public function generatePdf(): StreamedResponse
    {
        try {
            // Retrieve all teachers
            $teachers = Teacher::all();
            $pdf = Pdf::loadView('teachers-pdf', compact('teachers'));
            return response()->streamDownload(function () use ($pdf) {
                echo $pdf->stream();
            }, 'Teachers.pdf');

        } catch (Exception $e) {
            Log::error('Error generating PDF: '.$e->getMessage());
            return response()->json(['error' => 'Failed to generate PDF'], 500);
        } finally {
            $this->alert('success','PDF downloaded Successfully', [
                'position' => 'top',
                'timer' => 3000,
                'toast' => true,
                'timeProgressBar' => true,
            ]);
        }
    }

    public function delete($employee_id): void
    {
        try {
            $teacher = Teacher::where('employee_id', $employee_id)->firstOrFail();
            Log::info('Teacher to delete: ', ['teacher_id' => $teacher->employee_id]);
            Teacher::where('employee_id', $employee_id)->delete();

            $this->alert('success', 'Teacher deleted successfully', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);

            $this->resetPage();
        } catch (Exception $e) {
            $this->alert('error', 'Error', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Failed to delete teacher.',
                'timerProgressBar' => true,
            ]);
            Log::error('Delete teacher failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $teachers = Teacher::paginate(10);
        return view('livewire.admin.teacher.list-teacher', [
            'teachers' => $teachers,
        ]);
    }
}

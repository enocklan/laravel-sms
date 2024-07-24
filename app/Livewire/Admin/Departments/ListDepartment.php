<?php

namespace App\Livewire\Admin\Departments;

use App\Models\Departments;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ListDepartment extends Component
{
    use WithPagination, LivewireAlert;

    public $department;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;

    protected $listeners = [
        'departmentAdded' => '$refresh'
    ];

    public function delete($id)
    {
        $department = Departments::findOrFail($id);
        $department->delete();

        $this->alert('success', 'Department Deleted Successfully', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => true,
        ]);

        $this->resetPage();
    }

    public function generatePdf(): StreamedResponse
    {
        $departments = Departments::all();
        $pdf = Pdf::loadView('department-pdf', compact('departments'));

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'departments.pdf');
    }

    public function render()
    {
        $departments = Departments::paginate($this->perPage);
        return view('livewire.admin.departments.list-department', compact('departments'));
    }
}

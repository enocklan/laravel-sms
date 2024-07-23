<?php

namespace App\Livewire\Admin\Departments;

use App\Models\Departments;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use PDF;

class ListDepartment extends Component
{
    use WithPagination,LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;

    protected $listeners = [
        'departmentAdded' => '$refresh'
    ];

    public function delete($id)
    {
        $department = Departments::findOrFail($id);
        $department->delete();

        $this->alert('success', 'Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'text' => 'Department Deleted Successfully',
            'timerProgressBar' => true,
        ]);
        $this->resetPage();
    }
//
//    public function downloadPDF()
//    {
//        $departments = Departments::all();
//        $pdf = PDF::loadView('admin.departments.pdf', compact('departments'));
//
//        return response()->streamDownload(
//            fn () => print($pdf->output()),
//            "departments.pdf"
//        );
//    }
    public function render()
    {
        return view('livewire.admin.departments.list-department',[
            'departments' => Departments::paginate($this->perPage)
        ]);
    }
}

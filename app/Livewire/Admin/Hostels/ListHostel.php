<?php

namespace App\Livewire\Admin\Hostels;

use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Hostel;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ListHostel extends Component
{
    use WithPagination,LivewireAlert;

    public $searchTerm;

    public $hostel;

    protected $paginationTheme = 'bootstrap';
    public function delete($id): void
    {
        try {
            $hostel = Hostel::findOrFail($id);
            $hostel->delete();

            $this->alert('success', 'Hostel deleted successfully', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'timerProgressBar' => true,
            ]);
        } catch (ModelNotFoundException) {
            $this->alert('error', 'Error', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Hostel not found.',
                'timerProgressBar' => true,
            ]);
        } catch (Exception) {

            $this->alert('error', 'Error', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' => 'Failed to delete Hostel.',
                'timerProgressBar' => true,
            ]);
        }
    }

    public function generatePdf(): StreamedResponse
    {
        $hostels = Hostel::all();
        $pdf = Pdf::loadView('hostels.hostel-pdf', compact('hostels'));

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->stream();
        }, 'hostel.pdf');
    }
    public function render()
    {
        $hostels = Hostel::query()
            ->where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('room_master', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('block', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('room_type', 'like', '%' . $this->searchTerm . '%')
            ->paginate(10);

        return view('livewire.admin.hostels.list-hostel', ['hostels' => $hostels]);
    }
}

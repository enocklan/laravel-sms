<?php

namespace App\Livewire\Admin\Hostels;

use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use App\Models\Hostel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditHostel extends Component
{
    use LivewireAlert;

    public $hostel_id;
    public $name;
    public $room_master;
    public $block;
    public $room_type;
    public $room_number;
    public $number_of_bed;
    public $number_of_bath;
    public $availability;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'room_master' => 'required|string|max:255',
            'block' => 'required|string|max:255',
            'room_type' => 'required|string|in:normal,ac,suite',
            'room_number' => 'required|integer',
            'number_of_bed' => 'required|integer',
            'number_of_bath' => 'required|integer',
            'availability' => 'required|boolean',
        ];
    }
//    protected $rules = [
//        'name' => 'required|string|max:255',
//        'room_master' => 'required|string|max:255',
//        'block' => 'required|string|max:255',
//        'room_type' => 'required|string|in:normal,ac,suite',
//        'room_number' => 'required|integer',
//        'number_of_bed' => 'required|integer',
//        'number_of_bath' => 'required|integer',
//        'availability' => 'required|boolean',
//    ];
    public function mount($id): void
    {
        $hostel = Hostel::findOrFail($id);
        $this->hostel_id = $hostel->id;
        $this->name = $hostel->name;
        $this->room_master = $hostel->room_master;
        $this->block = $hostel->block;
        $this->room_type = $hostel->room_type;
        $this->room_number = $hostel->room_number;
        $this->number_of_bed = $hostel->number_of_bed;
        $this->number_of_bath = $hostel->number_of_bath;
        $this->availability = $hostel->availability;
    }

    public function update()
    {
        $this->validate();

        $hostel = Hostel::findOrFail($this->hostel_id);
        $hostel->update([
            'name' => $this->name,
            'room_master' => $this->room_master,
            'block' => $this->block,
            'room_type' => $this->room_type,
            'room_number' => $this->room_number,
            'number_of_bed' => $this->number_of_bed,
            'number_of_bath' => $this->number_of_bath,
            'availability' => $this->availability,
        ]);

        $this->alert('success', 'Hostel updated successfully', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => false,
            'timerProgressBar' => true,
        ]);

//        return redirect()->route('admin.hostel.list');
    }

    public function render()
    {
        return view('livewire.admin.hostels.edit-hostel');
    }
}

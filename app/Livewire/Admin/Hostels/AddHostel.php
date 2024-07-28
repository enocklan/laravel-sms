<?php

namespace App\Livewire\Admin\Hostels;

use Illuminate\Http\RedirectResponse;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Hostel;

class AddHostel extends Component
{
    use LivewireAlert;
    public $name;
    public $room_master;
    public $block;
    public $room_type;
    public $room_number;
    public $number_of_bed;
    public $number_of_bath;
    public $availability;

    protected $rules = [
        'name' => 'required|string|max:255',
        'room_master' => 'required|string|max:255',
        'block' => 'required|string|max:255',
        'room_type' => 'required|string|in:normal,ac,suite',
        'room_number' => 'required|integer',
        'number_of_bed' => 'required|integer',
        'number_of_bath' => 'required|integer',
        'availability' => 'required|boolean',
    ];

    public function submit(): RedirectResponse
    {
        $this->validate();

        Hostel::create([
            'name' => $this->name,
            'room_master' => $this->room_master,
            'block' => $this->block,
            'room_type' => $this->room_type,
            'room_number' => $this->room_number,
            'number_of_bed' => $this->number_of_bed,
            'number_of_bath' => $this->number_of_bath,
            'availability' => $this->availability,
        ]);

        $this->alert('success', 'Success', [
        'position' => 'center',
        'timer' => 3000,
        'toast' => false,
        'text' => 'Room Added Successfully',
        'timerProgressBar' => true,
    ]);

        return redirect()->route('admin.hostel.list');
    }

    public function render()
    {
        return view('livewire.admin.hostels.add-hostel');
    }
}

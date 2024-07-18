<?php

namespace App\Livewire\Admin\Inc;

use Livewire\Component;

class Header extends Component
{
    public $admin;
    public function mount()
    {
        $this->admin = auth('admin')->user();
    }
    public function render()
    {
        return view('livewire.admin.inc.header');
    }
}

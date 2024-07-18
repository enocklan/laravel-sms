<?php

namespace App\Livewire\Admin\Account;

use Illuminate\View\View;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

/**
 * Customer Profile Component
 */
class AdminProfile extends Component
{
    use LivewireAlert, WithFileUploads;

    public $name;
    public $email;
    public $phoneNumber;
    public $profile;
    public $newProfileImage;

    /**
     * Initialize the component with customer data
     *
     * @return void
     */
    public function mount(): void
    {
        $customer = auth('admin')->user();

        if ($customer) {
            $this->name = $customer->name;
            $this->email = $customer->email;
            $this->phoneNumber = $customer->phoneNumber;
            $this->profile = $customer->profile; //$customer->profile stores the path to the profile image
        }
    }

    /**
     * Validation rules for the component
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
//                Rule::unique('customers')->ignore(auth('customer')->id()),
            ],
            'phoneNumber' => 'required|string|max:20',
            'newProfileImage' => 'nullable|image|max:2048', // Add appropriate validation for profile image
        ];
    }

    /**
     * Update the customer data
     *
     * @return void
     */
    public function updateProfile(): void
    {
        $this->validate();

        $customer = auth('admin')->user();

        // Handle profile image upload
        if ($this->newProfileImage) {
            $imagePath = $this->newProfileImage->store('profiles', 'public');
            if ($customer->profile) {
                Storage::disk('public')->delete($customer->profile); // Delete old profile image
            }
            $this->profile = $imagePath;
        }

        $customer->update([
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'profile' => $this->profile, // Update profile image path if needed
        ]);

        $this->alert('success','Profile Updated Successfully', [
            'position' => 'top',
            'timer' => 1500,
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    /**
     * Render the component view
     *
     * @return View
     */
    public function render()
    {
        return view('livewire.admin.account.admin-profile', [
            'admin' => auth('admin')->user(),
        ]);
    }
}

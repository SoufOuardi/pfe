<?php

namespace App\Livewire\Component;

use Livewire\Component;

class EditAddress extends Component
{
    public $profile, $address;

    protected $rules = [
        'address' => 'required|string',
    ];
    public function mount($profile)
    {
        $this->profile = $profile;
        $this->address = $profile->address;
    }
    public function updateAddress()
    {
        $this->validate([
            'address' => 'required|min:3|max:255',
        ]);

        $this->profile->update(['address' => $this->address]);

        session()->flash('message', 'Address updated successfully.');
    }
    public function render()
    {
        return view('livewire.component.edit-address');
    }
}

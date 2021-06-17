<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class ProfileCard extends Component
{
    public User $user;

    protected $listeners = ['profile-update' => 'render'];


    public function render()
    {
        return view('livewire.profile.profile-card');
    }
}

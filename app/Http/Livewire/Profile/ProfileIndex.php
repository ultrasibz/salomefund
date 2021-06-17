<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class ProfileIndex extends Component
{
    public User $user;


    public function render()
    {
        $this->user = auth()->user();
        return view('livewire.profile.profile-index');
    }
}

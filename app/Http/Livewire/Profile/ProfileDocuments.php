<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class ProfileDocuments extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
//        dd($this->user->avatar);
//        dd($this->user->getMedia('avatar'));

    }

    public function render()
    {
        return view('livewire.profile.profile-documents');
    }
}

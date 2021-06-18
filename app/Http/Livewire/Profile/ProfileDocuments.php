<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileDocuments extends Component
{
    use WithFileUploads;
    public User $user;

    public $nrc;
    protected $rules = [
        'nrc' => 'required'
    ];

    public function mount(User $user)
    {
        $this->user = $user;
//        dd($this->user->nrc);
//        dd($this->user->avatar);
//        dd($this->user->getMedia('avatar'));

    }

    public function render()
    {
        return view('livewire.profile.profile-documents');
    }

    public function nrc_upload()
    {
        $this->validate();
//        dd($this->nrc);
        $this->user->addMedia($this->nrc->getRealPath())->toMediaCollection('nrc');

    }
}

<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileEdit extends Component
{
    use WithFileUploads;

    public User $user;
    public $avatar;


    protected function rules()
    {
        return [
            'user.firstname' => 'required|string',
            'user.maidenname' => 'nullable|string',
            'user.lastname' => 'required|string',
            'user.nrc' => ['required','string',Rule::unique('users', 'nrc')->ignore($this->user->id)],
            'user.tpin' => ['required','numeric',Rule::unique('users', 'tpin')->ignore($this->user->id)],
            'user.email' => ['required','string',Rule::unique('users', 'email')->ignore($this->user->id)],
            'user.mobile' => ['required','string','phone:ZM',Rule::unique('users', 'mobile')->ignore($this->user->id)],
            'user.telephone' => ['nullable','string',Rule::unique('users', 'telephone')->ignore($this->user->id)],
            'user.fax' => ['nullable','string',Rule::unique('users', 'fax')->ignore($this->user->id)],
            'user.physical_address' => 'required|string',
            'user.postal_address' => 'required|string',
        ];
    }

    public function mount(User $user)
    {
        $this->user = $user;
//        dd($this->user->avatar);
//        dd($this->user->getMedia('avatar'));

    }

    public function render()
    {


        return view('livewire.profile.profile-edit');
    }

    public function save()
    {
        $this->validate();
//        dd($this->avatar->getRealPath());
        $this->user->save();
        if ($this->avatar) {
            $this->user->addMediaFromUrl($this->avatar->temporaryUrl())->toMediaCollection('avatar');
        }
        $this->emit('profile-update');

    }
}

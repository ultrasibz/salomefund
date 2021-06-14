<?php

namespace App\Http\Livewire\Groups;

use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class GroupUserAdd extends Component
{

    public Group $group;
    public User $user;

    protected $rules = [
        'user.firstname' => 'required|string',
        'user.maidenname' => 'nullable|string',
        'user.lastname' => 'required|string',
        'user.nrc' => 'required|string|unique:users,nrc',
        'user.tpin' => 'required|string|unique:users,tpin',
        'user.email' => 'required|string|unique:users,tpin',
        'user.mobile' => 'required|string|unique:users,tpin',
        'user.telephone' => 'nullable|string|unique:users,telephone',
        'user.fax' => 'nullable|string|unique:users,fax',
        'user.physical_address' => 'required|string',
        'user.postal_address' => 'required|string',
    ];


    public function mount(Group $group){
        $this->group = $group;
        $this->user = new User();
    }



    public function render()
    {
        return view('livewire.groups.group-user-add');
    }

    public function save()
    {
        $this->validate();
//        dd($this->user);
        $this->user->password = Hash::make('Welcome1');
        $this->user->is_admin = false;
        $this->user->save();

        $this->group->users()->attach($this->user);

        return $this->redirect(route('group.show',$this->group));
    }
}

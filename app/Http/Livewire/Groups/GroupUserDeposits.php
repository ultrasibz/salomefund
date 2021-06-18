<?php

namespace App\Http\Livewire\Groups;

use App\Models\Deposit;
use App\Models\Group;
use App\Models\User;
use Livewire\Component;

class GroupUserDeposits extends Component
{
    public Group $group;
    public User $user;

    protected $listeners = ['update' => 'render'];

    public function mount(Group $group, User $user)
    {
        $this->group = $group;
        $this->user = $user;
    }

    public function render()
    {
        $deposits = $this->user->deposits()
            ->where('group_id', $this->group->id)
            ->paginate(15);
//        dd($deposits);
        return view('livewire.groups.group-user-deposits', compact('deposits'));
    }
    public function remove(Deposit $deposit){
        $deposit->delete();
        $this->emit('update');
    }
}

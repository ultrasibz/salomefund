<?php

namespace App\Http\Livewire\Groups;

use App\Models\Deposit;
use App\Models\Group;
use App\Models\Type;
use App\Models\User;
use Livewire\Component;

class GroupUserDepositsAdd extends Component
{
    public Group $group;
    public User $user;
    public Deposit $deposit;

    protected $rules = [
        'deposit.amount' => 'required',
        'deposit.type_id' => 'required',
    ];

    public function mount(Group $group, User $user)
    {
        $this->group = $group;
        $this->user = $user;
        $this->deposit = new Deposit();
    }

    public function render()
    {
        $types = Type::all();
        return view('livewire.groups.group-user-deposits-add', compact('types'));
    }

    public function save()
    {
        $this->validate();
        $this->deposit->group_id = $this->group->id;
        $this->user->deposits()->save($this->deposit);

        $this->deposit->setStatus('approved');
        $this->emit('update');
        $this->deposit = new Deposit();

    }


}

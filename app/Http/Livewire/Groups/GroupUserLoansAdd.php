<?php

namespace App\Http\Livewire\Groups;

use App\Models\loan;
use App\Models\Group;
use App\Models\Type;
use App\Models\User;
use Livewire\Component;

class GroupUserLoansAdd extends Component
{
    public Group $group;
    public User $user;
    public Loan $loan;

    protected $rules = [
        'loan.amount' => 'required',
        'loan.type_id' => 'required',
    ];

    public function mount(Group $group, User $user)
    {
        $this->group = $group;
        $this->user = $user;
        $this->loan = new loan();
    }

    public function render()
    {
        $types = Type::all();
        return view('livewire.groups.group-user-loans-add', compact('types'));
    }

    public function save()
    {
        $this->validate();
        $this->loan->group_id = $this->group->id;
        $this->user->loans()->save($this->loan);
        $this->loan->setStatus('approved');
    }
}

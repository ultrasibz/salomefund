<?php

namespace App\Http\Livewire\Groups;

use App\Models\Deposit;
use App\Models\Group;
use App\Models\Loan;
use App\Models\User;
use Livewire\Component;

class GroupUserLoans extends Component
{
    public Group $group;
    public User $user;
    public Loan $loan;

    protected $listeners = ['update' => 'render'];


    public function mount(Group $group, User $user)
    {
        $this->group = $group;
        $this->user = $user;
    }

    public function render()
    {
        $loans = $this->user->loans()
            ->where('group_id', $this->group->id)
            ->paginate(15);
//        dd($deposits);
        return view('livewire.groups.group-user-loans', compact('loans'));
    }

    public function selected(Loan $loan){
      $this->loan = $loan;
      $this->emit('disburse-selected',$loan);
    }

    public function remove(Loan $loan){
        $loan->delete();
        $this->emit('update');
    }
}

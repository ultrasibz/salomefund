<?php

namespace App\Http\Livewire\Groups;

use App\Models\Bank;
use App\Models\Deposit;
use App\Models\Repayment;
use App\Models\Group;
use App\Models\Loan;
use App\Models\Type;
use App\Models\User;
use Livewire\Component;

class GroupUserRepaymentsAdd extends Component
{
    public Loan $loan;
    public Repayment $repayment;

    public User $user;

    protected $listeners = [
        'loan-selected' => 'loan_loaded'
    ];


    protected $rules = [
        'repayment.amount' => 'required',
        'repayment.type_id' => 'required',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->repayment = new Repayment();
    }

    public function render()
    {
        $types = Type::all();
        return view('livewire.groups.group-user-repayments-add', compact('types'));
    }


    public function save()
    {
        $this->validate();
        $this->repayment->loan_id = $this->loan->id;

        $this->repayment->save();
        $this->loan->setStatus('disbursed');
        $this->emit('update');
    }

    public function loan_loaded(Loan $loan)
    {
        $this->loan = $loan;
    }


}

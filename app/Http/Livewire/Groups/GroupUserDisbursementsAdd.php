<?php

namespace App\Http\Livewire\Groups;

use App\Models\Bank;
use App\Models\Deposit;
use App\Models\Disbursement;
use App\Models\Group;
use App\Models\Loan;
use App\Models\Type;
use App\Models\User;
use Livewire\Component;

class GroupUserDisbursementsAdd extends Component
{
    public Loan $loan;
    public Disbursement $disbursement;
    public Bank $myBank;
    public User $user;

    protected $listeners = [
        'load-selected' => 'disburse_loaded'
    ];

    protected $rules = [
        'disbursement.amount' => 'required',
        'disbursement.bank_id' => 'required',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        $banks = $this->user->banks()->get();
        return view('livewire.groups.group-user-disbursements-add', compact('banks'));
    }

    public function updated()
    {
        if ($this->disbursement->bank_id) {
            $this->myBank = Bank::find($this->disbursement->bank_id);
        }
    }

    public function save()
    {
        $this->validate();
        $this->disbursement->loan_id = $this->loan->id;

        $this->disbursement->save();
        $this->loan->setStatus('disbursed');
        $this->emit('update');
    }

    public function disburse_loaded(Loan $loan)
    {
        $this->loan = $loan;
        $this->disbursement = new Disbursement();
        $this->disbursement->amount = $loan->amount;
    }


}

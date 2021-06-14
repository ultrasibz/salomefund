<?php

namespace App\Http\Livewire\Groups;

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

    protected $listeners = [
        'disburse-selected' => 'disburse_loaded'
    ];

    protected $rules = [
        'disbursement.amount' => 'required',
        'disbursement.type_id' => 'required',
    ];


    public function render()
    {
        $types = Type::all();
        return view('livewire.groups.group-user-disbursements-add', compact('types'));
    }

    public function save()
    {
        $this->validate();
        $this->disbursement->save();
        $this->loan->setStatus('disbursed');
    }

    public function disburse_loaded(Loan $loan){
        $this->loan = $loan;
        $this->disbursement = new Disbursement();
        $this->disbursement->amount = $loan->amount;
        $this->disbursement->load_id = $loan->id;
//        dd($this->disbursement);
    }


}

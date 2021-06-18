<?php

namespace App\Http\Livewire\Profile;

use App\Models\Bank;
use App\Models\User;
use Livewire\Component;

class ProfileBank extends Component
{
    public User $user;
    public Bank $bank;

    protected $rules = [
        'bank.name' => 'required',
        'bank.account_name' => 'required',
        'bank.account_number' => 'required|unique:banks,account_number',
        'bank.branch' => 'required',
        'bank.branch_code' => 'required',
        'bank.swift_code' => 'sometimes',
    ];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->bank = new Bank();
    }

    public function render()
    {
        $banks = $this->user->banks()->latest()->get();
        return view('livewire.profile.profile-bank', compact('banks'));
    }

    public function save()
    {
        $this->user->banks()->save($this->bank);
        $bank = new Bank();
    }

    public function remove(Bank $bank)
    {
        $bank->delete();
    }
}

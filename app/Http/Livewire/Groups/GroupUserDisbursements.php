<?php

namespace App\Http\Livewire\Groups;

use Livewire\Component;

class GroupUserDisbursements extends Component
{
    protected $listeners = ['update' => 'render'];


    public function render()
    {
        return view('livewire.groups.group-user-disbursements');
    }
}

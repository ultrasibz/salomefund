<?php

namespace App\Http\Livewire\Groups;

use App\Models\Group;
use App\Models\User;
use Livewire\Component;

class GroupShow extends Component
{
    public Group $group;

    public function mount(Group $group){
        $this->group = $group;
    }

    public function render()
    {
        return view('livewire.groups.group-show');
    }
}

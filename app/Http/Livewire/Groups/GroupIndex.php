<?php

namespace App\Http\Livewire\Groups;

use App\Models\Group;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class GroupIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $groups = Group::paginate(15);
        return view('livewire.groups.group-index',compact('groups'));
    }
}

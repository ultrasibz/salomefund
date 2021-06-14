<?php

namespace App\Http\Livewire\Groups;

use App\Models\Group;
use Livewire\Component;

class GroupAdd extends Component
{
    public Group $group;

    protected $rules = [
        'group.name' => 'required|string',

        'group.start_on' => 'required',
        'group.end_on' => 'required',
    ];

    public function mount(){
        $this->group = new Group();
    }

    public function render()
    {
        return view('livewire.groups.group-add');
    }

    public function save()
    {
        $this->validate();
        $this->group->save();
        $this->group->setStatus('active');
        $this->emit('message', 'success', "Group added successfully");
        $this->emitUp('update');
        $this->group = new Group();
    }
}

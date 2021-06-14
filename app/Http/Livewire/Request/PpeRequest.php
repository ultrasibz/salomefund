<?php

namespace App\Http\Livewire\Request;

use Livewire\Component;
use Livewire\WithPagination;

class PpeRequest extends Component
{
    use WithPagination;

    public $status;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $requests = auth()->user()->requests()->orderBy('created_at', 'DESC');
//        if ($this->status) {
//            $requests->currentStatus($this->status);
//        }
        $requests = $requests->paginate(10);
        $statuses = $requests->pluck('status')->unique();
//        dd($statuses);
        return view('livewire.request.ppe-request', compact('requests', ));
    }
}

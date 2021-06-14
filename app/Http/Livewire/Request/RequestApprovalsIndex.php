<?php

namespace App\Http\Livewire\Request;

use App\Models\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class RequestApprovalsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $requests = Request::approvals()
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
//        dd($requests);
        return view('livewire.request.ppe-request', compact('requests'));
    }
}

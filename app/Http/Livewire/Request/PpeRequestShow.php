<?php

namespace App\Http\Livewire\Request;

use App\Models\Request;
use App\Models\User;
use App\Notifications\RequestApprovalNotifcation;
use Livewire\Component;
use Livewire\WithPagination;

class PpeRequestShow extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $request;

    public function mount(Request $request)
    {
        $this->request = $request;
    }

    public function render()
    {
        $issues = $this->request->issues()->paginate(5);
        return view('livewire.request.ppe-request-show', compact('issues'));
    }

    public function approve()
    {
        switch ($this->request->status) {
            case 'pending-manager':
                $this->request->manager_id = auth()->id();
                $this->request->setStatus('pending-hod', 'Awaiting HOD Approval');
                $this->request->manager_approved_at = now();
                $this->request->save();

                $this->request->hod->notify(new RequestApprovalNotifcation($this->request));

                break;

            case 'pending-hod':
                $this->request->hod_id = auth()->id();
                $this->request->setStatus('pending-sheq_manager', 'Awaiting SHEQ Manager Approval');
                $this->request->hod_approved_at = now();
                $this->request->save();

                $this->request->sheq_manager->notify(new RequestApprovalNotifcation($this->request));

                break;

            case 'pending-sheq_manager':
                $this->request->sheq_manager_id = auth()->id();
                $this->request->setStatus('pending-erm', 'Awaiting ERM Approval');
                $this->request->sheq_manager_approved_at = now();
                $this->request->save();

                $this->request->erm->notify(new RequestApprovalNotifcation($this->request));
                break;

            case 'pending-erm':
                $this->request->erm_id = auth()->id();
                $this->request->setStatus('pending-assignment', 'Awaiting Assigned to Compliance Officers');
                $this->request->erm_approved_at = now();
                $this->request->save();

                break;
        }

        $this->emit('alert','Request has been approved');
    }
}

<?php

namespace App\Http\Livewire\Request;

use App\Models\Equipment;
use App\Models\Matrix;
use App\Models\Request;
use App\Models\Task;
use App\Models\User;
use App\Notifications\RequestApprovalNotifcation;
use Livewire\Component;

class PpeRequestAdd extends Component
{

    public $matrices;
    public $task, $ref_no,$selectedPosition,$positions;
    public $selectedusers = [];

    protected $rules = [
        'task' => 'required',
        'ref_no' => 'sometimes',
        'selectedusers' => 'required',
        'matrices.*.is_mandatory' => 'required',
    ];

    public function render()
    {
//        dd( auth()->user());

        $users = User::where('user_unit_id', auth()->user()->user_unit_id)->get();

        $positions = $this->positions;
        $tasks = Task::all();
        $this->matrices = Matrix::where('task_id', $this->task)->get();

        return view('livewire.request.ppe-request-add', compact('users', 'tasks','positions'));
    }

    public function save()
    {

        $manager = User::where('job_code', auth()->user()->workflow->hod_code)->where('user_unit_code', auth()->user()->workflow->hod_unit)->first();
        $hod = User::where('job_code', auth()->user()->workflow->dm_code)->where('user_unit_code', auth()->user()->workflow->dm_unit)->first();
        $sheq_manager = User::where('positions_id', env('SHEQ_MANAGER_POSITION_ID'))->where('user_division_id', auth()->user()->user_division_id)->first();
        $erm = User::where('positions_id', env('ERM_POSITION_ID'))->first();

        if(is_null($manager)){
            $this->addError('manager', 'You currently have no assigned Manager');
            return;
        }

        if(is_null($hod)){
            $this->addError('hod', 'You currently have no assigned HOD');
            return;
        }

        if(is_null($sheq_manager)){
            $this->addError('sheq_manager', 'You currently have no assigned SHEQ Manager');
            return;
        }

//        if(is_null($erm)){
//            $this->addError('erm', 'You currently have no assigned ERM');
//            return;
//        }

//        if(is_null($erm)){
//            $this->addError('sheq_manager', 'You currently have no assigned ERM');
//            return;
//        }


        $this->validate();

        $matrices = $this->matrices;
        $users = $this->selectedusers;



        $request = Request::create([
            'user_id' => auth()->id(),
            'task_id' => $this->task,
            'ref_no' => $this->ref_no,
            'manager_id' => $manager->id,
            'hod_id' => $hod->id,
            'sheq_manager_id' => $sheq_manager->id,
//            'erm_id' => $erm->id,
            'config_division_id' => auth()->user()->user_division_id,
            'config_user_unit_id' => auth()->user()->user_unit_id,
        ]);


        foreach ($this->selectedusers as $user) {
            $issue = $request->issues()->create(
                [
                    'user_id' => $user
                ]
            );
            $issue->setStatus('pending', 'Awaiting Approvals');
        }

        $request->setStatus('pending-manager', 'Awaiting manager Approval');
        session()->flash('message', 'PPE Request Submitted Succesfully');

        $request->manager->notify(new RequestApprovalNotifcation($request));

//        dd('')
        $this->redirect(route('request.index'));
    }

    public function getTotalProperty()
    {

        return $this->matrices->sum(function ($item) {
            return $item->quantity * count($this->selectedusers);
        });
    }
}

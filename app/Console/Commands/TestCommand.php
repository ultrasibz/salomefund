<?php

namespace App\Console\Commands;

use App\Models\Deposit;
use App\Models\Group;
use App\Models\Request;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:tests';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
//        $user = User::where('staff_no',20310)->first();
////        dd($user->PASSWORD);
//        $user->PASSWORD = Hash::make('Welcome1');
//        $user->save();
//        dd($user);
//
        foreach (User::all() as $user){
//            $request->erm_id = User::where('positions_id', env('ERM_POSITION_ID'))->first()->id;
//            $request->save();
            $user->addMediaFromUrl(asset('media/users/blank.png'))->toMediaCollection('avatar');
        }

        User::all()->each->addMediaFromUrl(asset('media/users/blank.png'))->toMediaCollection('avatar');
    }
}

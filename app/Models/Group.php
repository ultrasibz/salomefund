<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Spatie\ModelStatus\HasStatuses;

class Group extends Model
{
    use HasFactory,HasStatuses;

    protected $appends = ['is_open'];
    protected $casts = [
        'total_deposits' => 'double',
        'total_loans' => 'double',
    ];

    public function getIsOpenAttribute()
    {

        $cycle_start = Carbon::now();

        $cycle_start->day = $this->start_on;
        $cycle_start->hour = 06;
        $cycle_start->minute = 0;
        $cycle_start->second = 0;

        $cycle_end = Carbon::now();

        $cycle_end->day = $this->end_on;
        $cycle_end->hour = 17;
        $cycle_end->minute = 0;
        $cycle_end->second = 0;

        return now()->betweenIncluded($cycle_start, $cycle_end);

    }



    public function users(){
        return $this->belongsToMany(User::class)->where('is_admin',false)->withTimestamps();;
    }

    public function deposits(){
        return $this->hasMany(Deposit::class);
    }

    public function loans(){
        return $this->hasMany(Loan::class);
    }

    public function getDepositTotalAttribute(){
        return $this->deposits()->currentStatus('approved')->pluck('amount')->sum();
    }

    public function getDepositNetAmountTotalAttribute(){
        return $this->deposits()->currentStatus('approved')->get()->pluck('net_amount')->sum();
    }

    public function getLoanTotalAttribute(){
        return $this->loans()->get()->pluck('amount')->sum();
    }

    public function getLoanNetAmountTotalAttribute(){
        return $this->loans()->get()->pluck('net_amount')->sum();
    }

}

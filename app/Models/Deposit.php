<?php

namespace App\Models;

use App\Scopes\LastestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mpociot\Teamwork\TeamworkTeam;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\ModelStatus\HasStatuses;

class Deposit extends Model implements HasMedia
{
    use HasFactory,HasStatuses, InteractsWithMedia;

    protected $appends = [
        'status',
    ];

    protected $casts = [
        'amount' => 'double'
    ];

    protected $attributes = [
        'interest' => 10,
    ];

    protected $with = ['type'];


    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LastestScope);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }

//    public function getNetAmountAttribute(){
//        return $this->amount + ($this->amount * $this->interest)/100;
//    }
}

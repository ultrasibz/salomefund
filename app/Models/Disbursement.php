<?php

namespace App\Models;

use App\Scopes\LastestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mpociot\Teamwork\TeamworkTeam;
use Spatie\ModelStatus\HasStatuses;

class Disbursement extends Model
{
    use HasFactory, HasStatuses;


    protected $with = ['type'];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LastestScope);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function loan(){
        return $this->hasOne(Loan::class);
    }
}

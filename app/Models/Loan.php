<?php

namespace App\Models;

use App\Scopes\LastestScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mpociot\Teamwork\TeamworkTeam;
use Spatie\ModelStatus\HasStatuses;

class Loan extends Model
{
    use HasFactory, HasStatuses;

    protected $appends = [
        'net_amount'
    ];

    protected $with = ['type','repayments'];

    protected $attributes = [
        'interest' => 10,
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new LastestScope);
    }

    public function repayments()
    {
        return $this->hasMany(Repayment::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }


    public function getNetAmountAttribute()
    {
        return ($this->amount + ($this->amount * $this->interest) / 100);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

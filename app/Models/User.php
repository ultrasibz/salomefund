<?php

namespace App\Models;

use App\Models\Main\ConfigWorkFlow;
use App\Models\Main\DepartmentModel;
use App\Models\Main\DirectoratesModel;
use App\Models\Main\DivisionsModel;
use App\Models\Main\GradesModel;
use App\Models\main\LocationModel;
use App\Models\main\PaypointModel;
use App\Models\main\FunctionalUnitModel;
use App\Models\Main\PositionModel;
use App\Models\Main\ProfileDelegatedModel;
use App\Models\Main\ProfileModel;
use App\Models\Main\ProfileAssigmentModel;
use App\Models\Main\UserTypeModel;
use App\Models\Main\UserUnitModel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use willvincent\Rateable\Rateable;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, Rateable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guarded = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('avatar')
            ->singleFile();
        $this->addMediaConversion('small')
            ->width(200)
            ->height(200)
            ->sharpen(10);
    }

    public function getAccountNumberAttribute()
    {
        return sprintf('%s%s', str_pad($this->id, 4, '0', STR_PAD_LEFT), str_pad($this->currentTeam->id, 4, '0', STR_PAD_LEFT));
    }

    function getFullnameAttribute()
    {
        return "{$this->firstname}, {$this->lastname}";
    }

    function getRatingAttribute()
    {
        return number_format($this->averageRating());
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function getDepositTotalAttribute()
    {
        return $this->deposits()->currentStatus('approved')->pluck('amount')->sum();
    }

    public function getDepositNetAmountTotalAttribute()
    {
        return $this->deposits()->currentStatus('approved')->get()->pluck('net_amount')->sum();
    }

    public function getLoanTotalAttribute()
    {
        return $this->loans()->get()->pluck('amount')->sum();
    }

    public function getLoanNetAmountTotalAttribute()
    {
        return $this->loans()->get()->pluck('net_amount')->sum();
    }

    public function getAvatarAttribute()
    {
        return $this->getFirstMedia('avatar');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }


}

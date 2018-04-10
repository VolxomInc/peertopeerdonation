<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Access\User\Traits\UserAccess;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Access\User\Traits\Scope\UserScope;
use App\Models\Access\User\Traits\UserSendPasswordReset;
use App\Models\Access\User\Traits\Attribute\UserAttribute;
use App\Models\Access\User\Traits\Relationship\UserRelationship;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use UserScope,
        UserAccess,
        Notifiable,
        UserAttribute,
        UserRelationship,
        UserSendPasswordReset;

    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password','user_name','phone_number','currency','tigo_cash','mobile_money_name','mobile_money_number','bitcoin_address','referrer_email','manager_email','affiliate_id', 'referred_by','last_login_ip','last_login_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('access.users_table');
    }
}

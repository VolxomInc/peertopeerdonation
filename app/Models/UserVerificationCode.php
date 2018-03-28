<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerificationCode extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_verification_code';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['user_id'];

    protected $fillable = [
        'user_id',
        'code',
        'attempts',
        'created_by',
        'updated_by',
    ];
}

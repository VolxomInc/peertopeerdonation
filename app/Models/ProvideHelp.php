<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvideHelp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'provide_help';
    protected $primaryKey = 'provider_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */

    protected $guarded = ['provider_id'];

    protected $fillable = [
        'provider_new_id',
        'amount',
        'amount_left',
        'status',
        'assigned_member_id',
        'wait_provide',
        'created_at',
        'updated_at',
        'deleted_at',
        'user_id',
        'reward',
        'release_date',
        'finish_time'
    ];
}

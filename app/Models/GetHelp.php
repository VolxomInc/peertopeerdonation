<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GetHelp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'get_help';
    protected $primaryKey = 'receiver_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */

    protected $guarded = ['receiver_id'];

    protected $fillable = [
        'amount_needed',
        'status',
        'helped_member_id',
        'wait_receive',
        'created_at',
        'updated_at',
        'deleted_at',
        'user_id',
    ];
}

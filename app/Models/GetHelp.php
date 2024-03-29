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
        'receiver_new_id',
        'amount_needed',
        'user_id',
    ];
}

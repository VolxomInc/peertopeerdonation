<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMessages extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_messages';
    protected $primaryKey = 'message_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */

    protected $guarded = ['message_id'];

    protected $fillable = [
        'message',
        'provider_get_help_id',
        'user_id',
        'created_at',
        'updated_at',
    ];
}

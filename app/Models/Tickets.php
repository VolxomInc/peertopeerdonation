<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'tickets';
    protected $primaryKey = 'ticket_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */

    protected $guarded = ['ticket_id'];

    protected $fillable = [
        'topic',
        'status',
        'comments',
        'user_id'
    ];
}

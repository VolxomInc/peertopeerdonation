<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'commitment_pool';
    protected $primaryKey = 'commitment_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */

    protected $guarded = ['commitment_id'];

    protected $fillable = [
        'user_id',
        'amount',
    ];
}

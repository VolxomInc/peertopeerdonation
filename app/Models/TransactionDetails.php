<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'transaction_details';
    protected $primaryKey = 'transaction_id';
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */

    protected $guarded = ['transaction_id'];

    protected $fillable = [
        'user_id',
        'bank_name',
        'account_name',
        'account_number'
    ];
}

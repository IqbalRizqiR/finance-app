<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionLog extends Model
{
    protected $table = 'transaction_logs';
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
        'transaction_type',
        'amount',
        'source',
        'description'
    ];
}

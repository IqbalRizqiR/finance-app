<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoneySource extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(TransactionLog::class);
    }
}

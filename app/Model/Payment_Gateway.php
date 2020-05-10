<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment_Gateway extends Model
{
    public function Factor()
    {
        return $this->belongsToMany(Factor::class, 'Transaction');
    }
}

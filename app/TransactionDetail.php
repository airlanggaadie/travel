<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    protected $table = 'transactions_details';
    
    use SoftDeletes;

    protected $fillable = [
        'transactions_id','user_name','nationality','is_visa','doe_passport'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transaction_id','id');
    }
}

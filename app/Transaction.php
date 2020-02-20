<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travelpackages_id','users_id','additional_visa','transaction_total','transaction_status'
    ];

    public function detail()
    {
        return $this->hasMany(TransactionDetail::class,'transactions_id','id');
    }

    public function travelpackage()
    {
        return $this->belongsTo(TravelPackage::class,'travelpackages_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}

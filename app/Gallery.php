<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travelpackages_id','image'
    ];

    public function travelpackages()
    {
        return $this->belongsTo(TravelPackage::class,'travelpackages_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;
    
    protected $table = "travelpackages";

    protected $fillable = [
        'title','slug','location','about','featured_event','language','foods','departure_date','duration','type','price'
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class,'travelpackages_id','id');
    }
}

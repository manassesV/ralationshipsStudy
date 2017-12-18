<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    
    protected $fillable =['latitude','longitude'];


    public function country(){
        return $this->belongsTo(Country::class,'country_id','id');
    }
}

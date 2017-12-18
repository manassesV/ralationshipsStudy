<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Location;

class Country extends Model
{
    
    protected $fillable = ['nome'];


    public function location()
    {
        return $this->hasOne(Location::class,'country_id','id');
        
    }
    
    public function states()
    {
        return $this->hasMany(State::class,'country_id','id');
    }
}

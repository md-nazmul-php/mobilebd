<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilepost extends Model
{
    use HasFactory;

    protected $table = "mobileposts";

    public function mobilecategories(){
        return $this->hasMany(Mobilecategory::class);
    }
    public function mobilevariants(){
        return $this->hasMany(Mobilevariant::class);
    }
    public function mobileimages(){
        return $this->hasMany(Mobileimage::class);
    }
    public function mobilevideos(){
        return $this->hasMany(Mobilevideo::class);
    }
    public function mobilespecones(){
        return $this->hasMany(Mobilespecone::class);
    }
    public function mobilespectwos(){
        return $this->hasMany(Mobilespectwo::class);
    }
    public function mobilespecthrees(){
        return $this->hasMany(Mobilespecthree::class);
    }
    public function mobileratings(){
        return $this->hasMany(Mobilerating::class);
    }
    public function mobileoffers(){
        return $this->hasMany(Mobileoffer::class);
    }
    public function mobilecomments(){
        return $this->hasMany(Mobilecomment::class);
    }
}

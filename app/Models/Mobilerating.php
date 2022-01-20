<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilerating extends Model
{
    use HasFactory;

    protected $table = "mobileratings";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }

    public function rating(){
        return $this->belongsTo(Rating::class);
    }

}

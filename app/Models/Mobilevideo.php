<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilevideo extends Model
{
    use HasFactory;

    protected $table = "mobilevideos";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobileimage extends Model
{
    use HasFactory;

    protected $table = "mobileimages";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

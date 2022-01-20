<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilespecthree extends Model
{
    use HasFactory;
    protected $table = "mobilespecthrees";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

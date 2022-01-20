<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilespecone extends Model
{
    use HasFactory;
    protected $table = "mobilespecones";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

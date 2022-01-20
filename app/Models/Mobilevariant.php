<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilevariant extends Model
{
    use HasFactory;

    protected $table = "mobilevariants";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

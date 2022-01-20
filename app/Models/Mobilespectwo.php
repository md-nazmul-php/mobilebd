<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilespectwo extends Model
{
    use HasFactory;
    protected $table = "mobilespectwos";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

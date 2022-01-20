<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilecomment extends Model
{
    use HasFactory;

    protected $table = "mobilecomments";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }
}

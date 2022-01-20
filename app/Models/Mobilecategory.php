<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilecategory extends Model
{
    use HasFactory;

    protected $table = "mobilecategories";

    public function mobilepost(){
        return $this->belongsTo(Mobilepost::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

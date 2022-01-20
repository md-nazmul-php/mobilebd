<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobicatname extends Model
{
    use HasFactory;
    protected $table='mobicatnames';

    public function mobilecategory(){
        return $this->hasOne(Mobilecategory::class);
    }
}

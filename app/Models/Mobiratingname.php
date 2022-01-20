<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobiratingname extends Model
{
    use HasFactory;
    protected $table='mobiratingnames';

    public function mobilerating(){
        return $this->hasOne(Mobilerating::class);
    }
}

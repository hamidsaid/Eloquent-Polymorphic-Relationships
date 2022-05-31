<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public function imageable(){
        //photo table will be used as pivot for product and staff tables
        return $this->morphTo();
    }
}

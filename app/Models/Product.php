<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function photos(){
        //second paramater is the method connecting them in Photo Model
        return $this->morphMany('App\Models\Photo', 'imageable'); 
    }
}

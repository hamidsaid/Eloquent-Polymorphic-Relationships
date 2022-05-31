<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// A one-to-many polymorphic relation is similar to a typical one-to-many relation; 
// however, the child model can belong to more than one type of model using a single 
// association. For example, imagine users of your application can "comment" on posts 
// and videos. Using polymorphic relationships, you may use a single comments table to 
// contain comments for both posts and videos. 

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get all of the Product's photos.
     */
    public function photos(){
        //second paramater is the method connecting them in Photo Model
        return $this->morphMany('App\Models\Photo', 'imageable'); 
    }
}

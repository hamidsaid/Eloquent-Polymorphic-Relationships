<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// A one-to-many polymorphic relation is similar to a typical one-to-many relation; 
// however, the child model can belong to more than one type of model using a single 
// association. For example, imagine users of your application can "comment" on posts 
// and videos. Using polymorphic relationships, you may use a single comments table to 
// contain comments for both posts and videos. 
class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'path'
    ];

    public function imageable(){
        //photo table will contain information for both product and staff tables
        //i.e it will be used by two table at the same time
        return $this->morphTo();
    }
}

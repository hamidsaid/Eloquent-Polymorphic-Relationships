<?php

use Illuminate\Support\Facades\Route;
use App\Models\Photo;
use App\Models\Staff;
use App\Models\Product;


// A one-to-one polymorphic relation is similar to a typical one-to-one relation;
//  however, the child model can belong to more than one type of model using a 
//  single association. For example, a blog Post and a User may share a polymorphic 
//  relation to an Image model. Using a one-to-one polymorphic relation allows you 
//  to have a single table of unique images that may be associated with posts and users.


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function(){

    //create a photo for staff for E.g
   // $staff = Staff::findOrFail(1);
    $product = Product::findOrFail(2);

    $photo = new Photo(['path'=>'tesla.jpg']);
    //or
    //$photo = new Photo();
    //$photo->path = 'example.jpg';
    $product->photos()->save($photo);

});

<?php

namespace App\Http\Controllers;

use App\Models\product_photo;
use Illuminate\Http\Request;

class ProductPhotoController2 extends Controller
{
    public function getPhotoByid($id){
        $data = product_photo::where("product_id",$id)->get();
        return ($data);
    }
}

<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\product_photo;
use App\Models\productModel;
use Illuminate\Http\Request;

class homePageCustome extends Controller
{
    public function getAllProduct(){
        $data = productModel::get(); 
        return ($data);
    }
}

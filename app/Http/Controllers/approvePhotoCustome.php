<?php

namespace App\Http\Controllers;

use App\Models\approvePhotoModel;
use App\Models\product_photo;
use Illuminate\Http\Request;

class approvePhotoCustome extends Controller
{
    public function appPhototopro(Request $req){
        $data = product_photo::create($req->all());
        return ($data);
    }

    public function getPhotoappByID($id){
        $data = approvePhotoModel::where('user_id',$id)->get();
        return ($data);
    }
}

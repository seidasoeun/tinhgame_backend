<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productCustome extends Controller
{
    public function getProductUser(){
        $current_user_id = Auth::user()->id;
        $data = productModel::where("user_id",$current_user_id)->get();
        return ($data);
    }
    public function getProductByID($id){
        $data = productModel::where('id',$id)->first();
        return ($data);
    }
    public function getProductByIDAll($id){
        $data = productModel::where('user_id',$id)->get();
        return ($data);
    }

    public function getProductUserImg($id){
        $data = productModel::where('id',$id)->first();
        $user = $data->getUser;
        $Allphoto = $data->getAllPhoto;
        $data->User = $user;
        $data->product_photo = $Allphoto;
        return ($data);
    }

    public function getProductByType($id){
        $data = productModel::where('type',$id)->get();
        return ($data);
    }
}

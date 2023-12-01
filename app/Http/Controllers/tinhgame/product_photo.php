<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\product_photo as ModelsProduct_photo;
use App\Models\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class product_photo extends Controller
{
    public function store(Request $req){
        $current_user_id = Auth::user()->id;
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = ModelsProduct_photo::create($req->all());
        return ($data);
    }



}

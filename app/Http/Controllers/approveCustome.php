<?php

namespace App\Http\Controllers;

use App\Models\approveModel;
use App\Models\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class approveCustome extends Controller
{
    public function apptopro(Request $req){
        $data = productModel::create($req->all());
        return ($data);
    }

    public function getApproveLen(){
        $current_user_id = Auth::user()->id;
        $data = approveModel::where("user_id",$current_user_id)->get();
        return ($data);
    }
}

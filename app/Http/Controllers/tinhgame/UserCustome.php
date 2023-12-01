<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\approveModel;
use App\Models\productModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCustome extends Controller
{
    public function getalluser(){
        $data = User::all();
        return ($data);
    }

    public function changePass(Request $req){
        $current_user_id = Auth::user()->id;
        $user = User::where('id',$current_user_id)->first();

        if($user->password == $req->oldPass){
            $user->update([
                "password" => $req->newPass,
            ]);
            return ('Change Success');
        }
        return ('password incorrect');
    }

    // get allproduct
    public function getallproduct(){
        $data = productModel::all();
        return ($data);
    }

    // getallapprove
    public function getallapprove(){
        $data = approveModel::all();
        return ($data);
    }
    
}

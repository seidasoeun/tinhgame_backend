<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\inboxtoadminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inboxtoadminController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = inboxtoadminModel::where("user_id",$current_user_id)->get();
        return ($data);
    }

    public function store(Request $req){
        $current_user_id = Auth::user()->id;
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = inboxtoadminModel::create($req->all());
        return ($data);
    }

    public function destroy($id){
        $data = inboxtoadminModel::where('product_id',$id)->delete();
        return ($data);
    }
}

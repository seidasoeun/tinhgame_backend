<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\approveModel;
use App\Models\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{   
    public function index(){
        $data = productModel::get(); 
        return ($data);
    }

    public function store(Request $req){
        $current_user_id = Auth::user()->id;
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = productModel::create($req->all());
        return ($data);
    }

    // // Alway Search with param for work
    public function show($id){
        $data = productModel::where("product_id",$id)->first();
        return ($data);
    }

    public function destroy($id){
        $data = productModel::where('id',$id)->delete();
        return ($data);
    }

    public function update(Request $req,$id){
        $data = productModel::where('id',$id)->update($req->all());
        return ($data);
    }
}

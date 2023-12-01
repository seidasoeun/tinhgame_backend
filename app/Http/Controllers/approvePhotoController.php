<?php

namespace App\Http\Controllers;

use App\Models\approvePhotoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class approvePhotoController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = approvePhotoModel::where('id',$current_user_id)->get(); 
        return ($data);
    }
    public function store(Request $req){
        $current_user_id = Auth::user()->id;
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = approvePhotoModel::create($req->all());
        return ($data);
    }

    // Alway Search with param for work
    public function show($id){
        $data = approvePhotoModel::where("product_id",$id)->get();
        return ($data);
    }

    public function destroy($id){
        $data = approvePhotoModel::where("user_id",$id)->delete();
        return ($data);
    }
}

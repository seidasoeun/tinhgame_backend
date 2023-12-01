<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\buyproductModel;
use Illuminate\Http\Request;

class buyproductController extends Controller
{
    public function index(){
        $data = buyproductModel::get();
        return ($data);
    }
    public function store(Request $req){
        $data = buyproductModel::create($req->all());
        return ($data);
    }
    public function destroy($id){
        $data = buyproductModel::where('id',$id)->delete();
        return ($data);
    }
}

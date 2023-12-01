<?php

namespace App\Http\Controllers;

use App\Models\approveModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApproveController extends Controller
{
    public function index(){
        $data = approveModel::get();
        return ($data);
    }

    public function store(Request $req){
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = approveModel::create($req->all());
        return ($data);
    }

    public function destroy($id){
        $data = approveModel::where('id',$id)->delete();
        return ($data);
    }

    public function update(Request $req,$id){
        $data = approveModel::where('id',$id)->update($req->all());
        return ($data);
    }
}

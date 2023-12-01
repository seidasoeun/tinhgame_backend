<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Models\commentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentController extends Controller
{
    public function index(){
        $data = commentModel::get();
        return ($data);
    }
    public function store(Request $req){
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = commentModel::create($req->all());
        return ($data);
    }
    public function show($id){
        $data = commentModel::where('user_id',$id)->first();
        $user = $data->getUser;
        $data->User = $user;
        return ($data);        
    }
    public function update(Request $req,$id){
        $data = commentModel::where('id',$id)->update($req->all());
        return ($data);
    }
    public function destroy($id){
        $data = commentModel::where('id',$id)->delete();
        return ($data);
    }
}

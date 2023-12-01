<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\inboxModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class inboxController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = inboxModel::where('user_id',$current_user_id)->get();
        return $data;
    }

    public function store(Request $req){
        $req->merge(["inbox_by"=>Auth::user()->id]);
        $data = inboxModel::create($req->all());
        return ($data);
    }

    public function destroy($id){
        $data = inboxModel::where('id',$id)->delete();
        return ($data);
    }
}

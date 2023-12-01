<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\soldModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class soldController extends Controller
{
    public function index(){
        $current_user_id = Auth::user()->id;
        $data = soldModel::where("user_id",$current_user_id)->get();
        return ($data);
    }
    public function store(Request $req){
        $data = soldModel::create($req->all());
        return ($data);
    }
}

<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\feedbackModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class feedbackController extends Controller
{
    public function index(){
        $data = feedbackModel::get();
        return $data;
    }

    public function store(Request $req){
        $req->merge(["user_id"=>Auth::user()->id]);
        $data = feedbackModel::create($req->all());
        return ($data);
    }
}

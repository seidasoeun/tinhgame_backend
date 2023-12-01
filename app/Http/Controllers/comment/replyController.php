<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Models\replyModel;
use Illuminate\Http\Request;

class replyController extends Controller
{
    public function store(Request $req){
        $data = replyModel::create($req->all());
        return ($data);
    }
    public function show($id){
        $data = replyModel::where('comment_id',$id)->get();
        return ($data);
    }
    public function update(Request $req,$id){
        $data = replyModel::where('id',$id)->update($req->all());
        return ($data);
    }
    public function destroy($id){
        $data = replyModel::where('id',$id)->delete();
        return ($data);
    }
}

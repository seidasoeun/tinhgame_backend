<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Models\commentModel;
use Illuminate\Http\Request;

class commentCustome extends Controller
{
    public function getAllCommentByProductID($id){
        $data = commentModel::where('product_id',$id)->get();
        return ($data);
    }

    // Delete Product => Delete Comment , Reply
    public function deleteByProduct($id){
        $data = commentModel::where('product_id',$id)->delete();
        return ($data);
    }
}

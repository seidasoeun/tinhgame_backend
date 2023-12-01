<?php

namespace App\Http\Controllers\comment;

use App\Http\Controllers\Controller;
use App\Models\replyModel;
use Illuminate\Http\Request;

class replyCustome extends Controller
{
    public function deleteAllReplyByComment($id){
        $data = replyModel::where('comment_id',$id)->delete();
        return ($data);
    }
    // Delete Product => Delete Comment , Reply
    public function deleteByProduct($id){
        $data = replyModel::where('product_id',$id)->delete();
        return ($data);
    }
}

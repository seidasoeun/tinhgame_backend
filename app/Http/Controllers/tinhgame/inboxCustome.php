<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\inboxModel;
use App\Models\User;
use Illuminate\Http\Request;

class inboxCustome extends Controller
{
    public function getDataInbox($id){
        $data = User::where('id',$id)->first();
        return ($data);
    }
}

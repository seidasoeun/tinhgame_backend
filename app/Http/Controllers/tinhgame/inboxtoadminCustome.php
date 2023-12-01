<?php

namespace App\Http\Controllers\tinhgame;

use App\Http\Controllers\Controller;
use App\Models\inboxtoadminModel;
use Illuminate\Http\Request;

class inboxtoadminCustome extends Controller
{
    public function getAllDataInboxtoadmin(){
        $data = inboxtoadminModel::get();
        return ($data);
    }
}

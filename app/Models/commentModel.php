<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentModel extends Model
{
    use HasFactory;

    protected $table = "comment";
    protected $guarded = ["id"];

    // user_id bos product
    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }
  
}

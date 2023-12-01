<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $guarded = ["id"];
                                            // user_id bos product
    public function getUser(){
        return $this->belongsTo(User::class,'user_id');
    }
                                                  // product_id bos product_photo
    public function getAllPhoto(){
        return $this->hasMany(product_photo::class,'product_id');
    }                                               
}

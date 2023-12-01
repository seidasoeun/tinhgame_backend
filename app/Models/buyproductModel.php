<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyproductModel extends Model
{
    use HasFactory;

    protected $table = "buyproduct";
    protected $guarded = ['id'];
}

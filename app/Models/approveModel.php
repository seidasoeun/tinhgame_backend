<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approveModel extends Model
{
    use HasFactory;

    protected $table = "approve";
    protected $guarded = ['id'];
}

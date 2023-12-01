<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soldModel extends Model
{
    use HasFactory;

    protected $table = "sold";
    protected $guarded = ["id"];
}

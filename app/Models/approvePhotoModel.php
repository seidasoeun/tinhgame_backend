<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approvePhotoModel extends Model
{
    use HasFactory;

    protected $table = "photo_approve";
    protected $guarded = ['id'];
}

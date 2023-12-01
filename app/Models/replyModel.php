<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replyModel extends Model
{
    use HasFactory;

    protected $table = 'reply';
    protected $guarded = ['id'];

}

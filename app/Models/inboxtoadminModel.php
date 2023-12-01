<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inboxtoadminModel extends Model
{
    use HasFactory;

    protected $table = 'inbox_toadmin';
    protected $guarded = ['id'];
}

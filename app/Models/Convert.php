<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convert extends Model
{
    protected $fillable = [
        'file_id', 'path', 'format'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class csv extends Model
{
    protected $fillable = [
        'admin_id',

        'filename',
        'file',
    ];
}

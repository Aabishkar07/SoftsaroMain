<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquire extends Model
{
    //
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'subject',
        'message',
        'number'

    ];
}

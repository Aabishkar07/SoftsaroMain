<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

 protected $fillable = [
    'name',
    'email',
    'phone',
    'project_name',
    'start_date',
    'due_date',
    'status',
    'deal_done',
    'percentage',
    'priority',
    'remarks',
];

}

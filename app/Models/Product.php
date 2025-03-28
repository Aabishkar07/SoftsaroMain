<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'title',
        'service_id',
        'image',
        'link',
    ];

    public function servicename(){
        return $this->belongsTo(Store::class,'service_id');
    }
}

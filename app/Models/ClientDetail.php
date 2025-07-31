<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientDetail extends Model
{
    //

    protected $fillable = [
        'client_id',
        'referred_by_name',
        'referred_by_phone',
        'bank_account',
        'amc',
        'quotation_file',
    ];

    /**
     * Relationship: ClientDetail belongs to Client
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

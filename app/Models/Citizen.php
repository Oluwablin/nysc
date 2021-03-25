<?php

namespace App\Models;

use App\Models\Ward;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    /*
     * A Citizen belongs to a word
     */
    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
}

<?php

namespace App\Models;

use App\Models\Ward;
use App\Models\LGA;
use App\Models\State;

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

    /*
     * A Citizen belongs to a lga
     */
    public function lga()
    {
        return $this->belongsTo(LGA::class, 'lga_id');
    }

    /*
     * A Citizen belongs to a state
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}

<?php

namespace App\Models;

use App\Models\Ward;
use App\Models\State;
use App\Models\Citizen;

use Illuminate\Database\Eloquent\Model;

class LGA extends Model
{
    /*
     * An LGA has  many wards
     */
    public function ward()
    {
        return $this->hasMany(Ward::class);
    }

    /*
     * An LGA belongs to a state
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    /*
     * An LGA has  many wards
     */
    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }
}

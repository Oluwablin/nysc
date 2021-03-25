<?php

namespace App\Models;

use App\Models\LGA;
use App\Models\Citizen;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /*
     * A State has  many lga
     */
    public function lga()
    {
        return $this->hasMany(LGA::class);
    }

    /*
     * A State has  many citizen
     */
    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }
}

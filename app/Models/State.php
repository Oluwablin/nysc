<?php

namespace App\Models;

use App\Models\LGA;

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
}

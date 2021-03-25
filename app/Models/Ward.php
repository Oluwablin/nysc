<?php

namespace App\Models;

use App\Models\LGA;
use App\Models\Citizen;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    /*
     * A Ward has  many citizens
     */
    public function citizen()
    {
        return $this->hasMany(Citizen::class);
    }

    /*
     * A Ward belongs to an lga
     */
    public function lga()
    {
        return $this->belongsTo(LGA::class, 'lga_id');
    }
}

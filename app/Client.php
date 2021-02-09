<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //



    public function Resevation()
    {
        return $this->hasMany(Reservation::class);
    }
}

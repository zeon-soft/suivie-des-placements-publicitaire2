<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{


    public function Commerce()
    {
        return $this->hasMany(Commerce::class);
    }
}

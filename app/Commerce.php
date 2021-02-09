<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{






    public function Circuit()
    {
        return $this->belongsTo(Circuit::class);
    }
}


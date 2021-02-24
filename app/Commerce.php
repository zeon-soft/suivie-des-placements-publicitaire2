<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commerce extends Model
{


   // protected $fillable=['all'];

    protected $guarded = [];

    public function Circuit()
    {
        return $this->belongsTo(Circuit::class);
    }
}


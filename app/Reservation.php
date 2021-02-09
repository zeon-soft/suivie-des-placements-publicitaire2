<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'nom_circuit',
        'dispo_circuit',
        'prix_circuit',
        'parent_id',
        'a_un_fils',

    ];


    public function Client()
    {
        return $this->belongsTo(Client::class);
    }

    public function mainCurcuits()
    {
        return $this->belongsTo('App\Reservation', 'parent_id');
    }

    public function Circuit()
    {
        return $this->hasOne(Circuit::class);
    }
}

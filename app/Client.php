<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable=['agent_de_saisie','N_client','Prénom_du_contact','Poste_du_contact'];
   // protected $guarded = ['_token'];


    public function Resevation()
    {
        return $this->hasMany(Reservation::class);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
 
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('agent_de_saisie');
            $table->integer('N_client');
            $table->string('Prénom_du_contact');
            $table->string('Poste_du_contact');
            $table->string('Raison_sociale');
            $table->string('Nom_entreprise');
            $table->string('Entreprise');
            $table->string('Adresse');
            $table->string('Telephone');
            $table->string(' e-mail');
            $table->string('site_internet');
            $table->string('RC N° :');
            $table->string('NIF');
            $table->string('NIS');
            $table->string('secteur_activité');
            $table->string('nombre_campagne_par_an');
            $table->string('type_de_campagne');
            $table->string('budget_de_campagne');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

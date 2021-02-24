<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerces', function (Blueprint $table) {
            $table->id();


            $table->string('Type_commerce');
            $table->string('num_client_commerce');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Entreprise');
            $table->string('Adresse');
            $table->string('GPS');
            $table->string('Téléphone');
            $table->string('Adresse_e_mail');
            $table->string('Daira');
            $table->string('Commune');
            $table->string('site_internet');
            $table->string('RC_num');
            $table->string('NIF');
            $table->string('NIS');
            $table->string('Jours_de_fermeture');
            $table->string('Mois_de_fermeture');
            $table->string('nombre_de_face');
            $table->string('fonction');
            $table->string('Catégorie_d_cafe')->nullable();
            $table->string('Mixte')->nullable();
            $table->string('Vestiaire')->nullable();
            $table->string('Coiffeur_homme_femme')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('Nombre_de_toilette')->nullable();
            $table->string('Etat_des_toilettes')->nullable();
            $table->string('Toilette_Homme')->nullable();
            $table->string('Toilette_Femme')->nullable();
            $table->string('Nombre_de_places_assises')->nullable();
            $table->string('Nombre_de_client_par_jour')->nullable();
            $table->string('Coiffeur_genre')->nullable();
            $table->string('Nombre_de_poste_travail')->nullable();
            $table->string('Nombre_de_siège')->nullable();
            $table->string('Etat_du_salon')->nullable();
            $table->string('Catégorie')->nullable();
            $table->string('Nombre de place')->nullable();


            $table->unsignedBigInteger('circuit_id')->unsigned();
            $table->foreign('circuit_id')->references('id')->on('circuits')
                ->onDelete('cascade');



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
        Schema::dropIfExists('commerces');
    }
}

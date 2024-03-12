<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('professionnels', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Identifiant du professionnel');
            $table->string('prenom', 25)->comment('Prénom du professionnel');
            $table->string('nom', 40)->comment('Nom du professionnel');
            $table->string('cp', 5)->comment('Code postal du professionnel');
            $table->string('ville', 28)->comment('Ville du professionnel');
            $table->string('telephone', 14)->comment('Téléphone du professionnel');
            $table->string('email', 191)->unique()->comment('Adresse mail du professionnel');
            $table->date('naissance')->comment('Date de naissance du professionnel');
            $table->boolean('formation')->comment('Activité de formation déjà effectuée oui ou non');
            $table->set('domaine', ['S', 'R', 'D'])->comment('Domaine d\'activité');
            $table->string('source', 191)->nullable()->comment('Source du profil (réseau, organisme partenaire, annonce...)');
            $table->text('observation')->nullable()->comment('Observations / commentaires');
            $table->timestamps();
            $table->unsignedBigInteger('metier_id');
            $table->foreign('metier_id')
                ->references('id')
                ->on('metiers')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionnels');
    }
};

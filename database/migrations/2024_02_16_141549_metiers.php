<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('metiers', function (Blueprint $table) {
            $table->id()->comment('Identifiant d\'un métier');
            $table->string('libelle', 120)->comment('Nom du métier');
            $table->text('description')->comment('Court descriptif d\'un métier');
            $table->string('slug', 120)->comment('Slug du métier (identifiant)');
            // timestamps permet la création de 2 rubriques : created_at et updated_at de type TIMESTAMP
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metiers');
    }
};

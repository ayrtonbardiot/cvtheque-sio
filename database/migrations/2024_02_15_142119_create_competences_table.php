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
        Schema::create('competences', function (Blueprint $table) {
            $table->id()->comment('Identifiant d\'une compétence');
            $table->string('intitule', 120)->comment('Nom de la compétence');
            $table->text('description')->comment('Court descriptif d\'une compétence');
            // timestamps permet la création de 2 rubriques : created_at et updated_at de type TIMESTAMP
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competences');
    }
};

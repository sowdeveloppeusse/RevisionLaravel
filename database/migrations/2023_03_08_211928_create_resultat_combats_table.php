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
        Schema::create('resultat_combats', function (Blueprint $table) {
            $table->id();
            $table->string('nom_vainqueur');
            $table->string('nom_perdant');
            $table->string('sans_verdique');
            $table->integer('etat');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultat_combats');
    }
};

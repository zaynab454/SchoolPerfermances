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
        Schema::create('matiere', function (Blueprint $table) {
            $table->id('id_matiere');
            $table->string('nom_matiere_ar', 100)->unique();
            $table->string('code_niveau');
            $table->string('nom_colonne');
            $table->foreign('code_niveau')->references('code_niveau')->on('niveau_scolaire')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matiere');
    }
};

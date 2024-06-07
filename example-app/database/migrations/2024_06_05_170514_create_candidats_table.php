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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('concours_id')->nullable();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin')->unique();
            $table->string('mail')->unique();
            $table->string('niveau_scolaire');
            $table->string('filiere');
            $table->timestamps();
            $table->foreign('concours_id')->references('id')->on('concours')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};

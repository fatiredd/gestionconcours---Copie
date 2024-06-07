<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossierCandidatsTable extends Migration
{
    public function up()
    {
        Schema::create('dossier_candidats', function (Blueprint $table) {
            $table->id(); // This will create an unsignedBigInteger
            $table->string('nom');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dossier_candidats');
    }
}

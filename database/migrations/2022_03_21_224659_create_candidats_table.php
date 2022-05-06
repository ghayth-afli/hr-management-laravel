<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('titre_pro');
            $table->string('email');
            $table->string('linkedin');
            $table->integer('tel');
            $table->text('adresse');
            $table->text('profil_candidat');
            $table->String('langue');
            $table->String('etat')->default('En cours de traitement');
            $table->text('photo');
            $table->foreignId('recrutement_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('candidats');
    }
}

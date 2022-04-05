<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecrutementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recrutements', function (Blueprint $table) {
            $table->id();
            $table->string('poste');
            $table->integer('nbr_poste');
            $table->string('type');
            $table->integer('experience');
            $table->string('niveau_etude');
            $table->string('langue');
            $table->char('genre');
            $table->text('description');
            $table->text('exigences');
            $table->date('date_expiration');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('departement_id')->constrained();
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
        Schema::dropIfExists('recrutements');
    }
}

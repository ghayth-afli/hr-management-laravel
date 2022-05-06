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
            $table->integer('nbr_poste')->nullable();
            $table->string('lieu')->nullable();
            $table->string('type')->nullable();
            $table->integer('experience')->nullable();
            $table->string('niveau_etude')->nullable();
            $table->string('langue')->nullable();
            $table->char('genre');
            $table->text('description')->nullable();
            $table->text('exigences')->nullable();
            $table->date('date_expiration')->nullable()->nullable();
            $table->foreignId('user_id')->constrained()->nullable();
            $table->foreignId('departement_id')->constrained()->nullable();
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

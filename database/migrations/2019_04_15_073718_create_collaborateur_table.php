<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateur', function (Blueprint $table) {
        $table->bigIncrements('id');
	    $table->string('civilite');
	    $table->string('nom');
	    $table->string('prenom');
	    $table->string('rue');
	    $table->char('code_postal', 5);
	    $table->string('ville');
	    $table->string('telephone')->nullable();
	    $table->string('email');
	    $table->unsignedBigInteger('entreprise_id');
	    $table->foreign('entreprise_id')->references('id')->on('entreprise');
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
        Schema::dropIfExists('collaborateur');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   if(!Schema::hasTable('responsable_filieres')){
        Schema::create('responsable_filieres', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('departement');
            $table->string('login')->index();
            $table->foreign('login')->references('login')->on('users')->onDelete('cascade');   
            $table->timestamps();
        });
    }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsable_filieres');
    }
};

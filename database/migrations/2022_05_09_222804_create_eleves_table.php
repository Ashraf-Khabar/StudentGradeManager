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
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('niveau');
            $table->string('code_fil')->index();
            $table->string('login')->index();
            $table->foreign('code_fil')->references('code')->on('filieres')->onDelete('cascade');
            $table->foreign('login')->references('login')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('eleves');
    }
};

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
        Schema::create('notes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code_eleve')->index();
            $table->string('code_elm_mod')->index();
            $table->foreign('code_eleve')->references('code')->on('eleves')->onDelete('cascade');
            $table->foreign('code_elm_mod')->references('code')->on('element__modules')->onDelete('cascade');
            $table->integer('note');    
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
        Schema::dropIfExists('notes');
    }
};

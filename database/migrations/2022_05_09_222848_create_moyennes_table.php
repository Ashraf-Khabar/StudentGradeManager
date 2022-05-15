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
        Schema::create('moyennes', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code_eleve')->index();
            $table->string('code_fil')->index();
            $table->foreign('code_eleve')->references('code')->on('eleves')->onDelete('cascade');
            $table->foreign('code_fil')->references('code')->on('filieres')->onDelete('cascade');
            $table->string('niveau');
            $table->string('note');
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
        Schema::dropIfExists('moyennes');
    }
};

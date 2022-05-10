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
        Schema::create('element__modules', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code')->unique();
            $table->string('designation');
            $table->string('vh');
            $table->string('poids');
            $table->string('code_mod')->index();
            $table->foreign('code_mod')->references('code')->on('modules')->onDelete('cascade');
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
        Schema::dropIfExists('element__modules');
    }
};

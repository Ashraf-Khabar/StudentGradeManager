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
        if(!Schema::hasTable('filieres')){
        Schema::create('filieres', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code')->unique();
            $table->string('designation');
            $table->string('responsable')->index();
            $table->foreign('responsable')->references('login')->on('responsable_filieres')->onDelete('cascade');
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
        Schema::dropIfExists('filieres');
    }
};

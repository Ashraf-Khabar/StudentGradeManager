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
        if(!Schema::hasTable('modules')){
            Schema::create('modules', function (Blueprint $table) {
                $table->Increments('id');
                $table->string('code')->unique();
                $table->string('designation');
                $table->string('niveau');
                $table->string('semestre');
                $table->string('code_fil')->index();
                $table->foreign('code_fil')->references('code')->on('filieres')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
};

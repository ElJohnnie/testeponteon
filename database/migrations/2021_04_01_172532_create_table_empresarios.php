<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmpresarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresarios', function (Blueprint $table) {
            
            $table->increments('id');
            $table->unsignedBigInteger('pai_id')->unsigned()->nullable();
            $table->string('nome');
            $table->string('celular');
            $table->string('estado');
            $table->string('cidade');
            $table->timestamps();
            $table->foreign('pai_id')->references('id')->on('pais');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresarios');
    }
}

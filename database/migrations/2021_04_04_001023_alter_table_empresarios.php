<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableEmpresarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empresarios', function (Blueprint $table) {
            $table->unsignedBigInteger('pai_id')->nullable();
            $table->foreign('pai_id')->references('id')->on('pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresarios', function (Blueprint $table) {
            $table->dropColumn('pai_id');
        });
    }
}

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
        Schema::table('data_diri', function (Blueprint $table) {
            $table->unsignedBigInteger('id_lowongan')->after('id_user')->nullable();
            $table->foreign('id_lowongan')->references('id')->on('lowongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_diri', function (Blueprint $table) {
            //
        });
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('giay', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ma');
            $table->string('ten');
            $table->Integer('giatien');
            $table->Integer('giamgia');
            $table->string('hinhanh');
            $table->string('kieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

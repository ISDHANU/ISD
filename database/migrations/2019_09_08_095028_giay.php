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
            $table->bigIncrements('Shoes_id');
            $table->string('Shoes_name');
            $table->Integer('Column');
            $table->string('Shoes_description');
            $table->string('Shoes_size');
            $table->string('Shoes_color');
            $table->string('Shoes_image');
            $table->Integer('Shoes_prices');
            $table->Integer('Shoes_sale');
            $table->string('Shoes_code');
            $table->Integer('Format');
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

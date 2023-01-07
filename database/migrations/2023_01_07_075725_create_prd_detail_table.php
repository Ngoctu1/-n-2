<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrdDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prd_detail', function (Blueprint $table) {
            $table->bigIncrements('prd_detail_id');
            $table->bigInteger('prd_id')->unsigned();
            $table->foreign('prd_id')->references('prd_id')->on('product');
            
            $table->string('prd_image');
            $table->string('prd_color');
            $table->integer('prd_size');
            $table->integer('prd_price');
            $table->integer('prd_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prd_detail');
    }
}

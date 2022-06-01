<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeproduct', function (Blueprint $table) {
            $table->id('home_product_id');
            $table->string('image_product');
            $table->string('image_sale');
            $table->integer('price');
            $table->integer('sale');
            $table->integer('image_sale_price');
            $table->string('name_product');
            $table->string('discount');
            $table->string('other');
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
        Schema::dropIfExists('homeproduct');
    }
}

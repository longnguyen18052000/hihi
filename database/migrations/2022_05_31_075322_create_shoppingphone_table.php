<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingphoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingphone', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_shopping_phone');
            $table->string('image_shopping_phone');
            $table->string('price_shopping_phone');
            $table->string('sale_shopping_phone');
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
        Schema::dropIfExists('shoppingphone');
    }
}

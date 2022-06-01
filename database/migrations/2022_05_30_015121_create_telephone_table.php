<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelephoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telephone', function (Blueprint $table) {
            $table->id('id');
            $table->string('image_telephone');
            $table->string('name_telephone');
            $table->string('price_telephone');
            $table->string('sale_telephone');
            $table->string('discount');
            $table->string('other');
            $table->string('hot_sale');
            $table->string('price_only');
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
        Schema::dropIfExists('telephone');
    }
}

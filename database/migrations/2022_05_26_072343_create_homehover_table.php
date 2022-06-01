<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomehoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homehover', function (Blueprint $table) {
            $table->id('home_hover_id');
            $table->string('phone');
            $table->string('watch');
            $table->string('laptop');
            $table->string('tablet');
            $table->string('head_phone');
            $table->string('smart_home');
            $table->string('accessory');
            $table->string('play_game');
            $table->string('maytroi');
            $table->string('repair');
            $table->string('sim');
            $table->string('new');
            $table->string('flash');
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
        Schema::dropIfExists('homehover');
    }
}

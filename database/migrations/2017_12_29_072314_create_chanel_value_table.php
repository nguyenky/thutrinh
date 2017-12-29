<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChanelValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chanel_value', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('giai');
            $table->integer('value');
            $table->integer('chanel_id')->unsigned();
            $table->foreign('chanel_id')->references('id')->on('chanels')->onDelete('cascade');
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
        Schema::dropIfExists('chanel_value');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number');
            $table->integer('type');
            $table->string('price');
            $table->string('trans')->nullable();
            $table->string('chanel_trung')->nullable();
            $table->string('chanel_bac')->nullable();
            $table->string('rest');
            $table->integer('date_customer_id');
            $table->integer('region')->nullable();
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
        Schema::dropIfExists('numbers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('answers', function (Blueprint $table) {
//            $table->id();
//            $table->text('name');
//            $table->text('surname');
//            $table->text('email');
//            $table->text('number');
//            $table->longText('answer');
//            $table->tinyInteger('seen');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}

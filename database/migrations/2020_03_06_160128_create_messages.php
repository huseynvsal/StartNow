<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//         Schema::create('messages', function (Blueprint $table) {
//             $table->id();
//             $table->text('name');
//             $table->text('surname');
//             $table->text('email');
//             $table->longText('message');
//             $table->tinyInteger('seen');
//         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('branch');
            $table->text('leaf');
            $table->text('sayings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('egles');
    }
}

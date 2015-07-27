<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SecondAttemptAtMigrationMod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Articles', function (Blueprint $table) {
            $table->text('excerpts')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Articles', function (Blueprint $table) {
            $table->dropColumn('excerpts');
        });
    }
}

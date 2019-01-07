<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToSports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sports', function (Blueprint $table) {
          $table->integer('money')->default(0);
          $table->double('result')->default(0);
          $table->enum('red_or_black',['R', 'B'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('storts', function (Blueprint $table) {
          $table->dropColumn('money');
          $table->dropColumn('result');
          $table->dropColumn('red_or_black');
        });
    }
}

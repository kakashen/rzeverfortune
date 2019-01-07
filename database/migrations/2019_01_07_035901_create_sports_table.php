<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sports', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->comment('推荐人名字');
      $table->date('recommended_at')->comment('推荐日期');
      $table->string('host')->comment('主队');
      $table->string('guest')->comment('客队');
      $table->string('first')->comment('初盘');
      $table->string('last')->nullable()->comment('终盘');
      $table->string('recommend')->comment('推荐');
      $table->string('chain')->nullable()->comment('串子');
      $table->string('remark')->nullable()->comment('备注');
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
    Schema::dropIfExists('sports');
  }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users_d_b', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name',100);
          $table->string('lastname',100);
          $table->string('password',100);
          $table->string('email',100);
          $table->string('user',100);
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
        Schema::dropIfExists('users_d_b');
    }
}

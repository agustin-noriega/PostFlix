<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posteos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('fecha');
            $table->string('imagen',500);
            $table->string('descripcion',500);
            $table->decimal('calificacion',2,1);

            $table->unsignedBigInteger('usuarios_id');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');

            $table->unsignedBigInteger('categorias_post_id');
            $table->foreign('categorias_post_id')->references('id')->on('categorias_post');

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
        Schema::dropIfExists('posteos');
    }
}

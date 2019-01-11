<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreffacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preffaces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seguidores');
            $table->integer('alcance');
            $table->integer('envolvimento');
            $table->integer('interacoes');
            $table->integer('publicacoes');
            $table->integer('seg_insta');
            $table->date('data');
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
        Schema::dropIfExists('preffaces');
    }
}

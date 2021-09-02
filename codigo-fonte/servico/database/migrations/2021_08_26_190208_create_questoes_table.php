<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->increments('id');
            $table->index('id');
            $table->string('descricao');
            $table->integer('id_assunto')->unsigned();
            $table->index('id_assunto');
            $table->foreign('id_assunto')
                ->references('id')->on('assuntos')
                ->onDelete('cascade');
            $table->integer('id_orgao')->unsigned();
            $table->index('id_orgao');
            $table->foreign('id_orgao')
                ->references('id')->on('orgaos')
                ->onDelete('cascade');
            $table->integer('id_banca')->unsigned();
            $table->index('id_banca');
            $table->foreign('id_banca')
                ->references('id')->on('bancas')
                ->onDelete('cascade');
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
        Schema::dropIfExists('questoes');
    }
}

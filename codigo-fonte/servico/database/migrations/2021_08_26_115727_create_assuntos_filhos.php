<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuntosFilhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assuntos_filhos', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->integer('id_assunto_pai')
                ->unsigned();
            $table->index('id_assunto_pai');
            $table->foreign('id_assunto_pai')
                ->nullable()
                ->references('id')->on('assuntos')
                ->onDelete('cascade');
            $table->index('id_assunto_filho');
            $table->integer('id_assunto_filho')
                ->unsigned();
            $table->foreign('id_assunto_filho')
                ->nullable()
                ->references('id')->on('assuntos')
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
        Schema::dropIfExists('assuntos_filhos');
    }
}

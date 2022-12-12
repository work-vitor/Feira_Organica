<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('preco');
            $table->integer('quantidade');
            $table->string('tp_unidade');
            $table->string('imagem', 256);
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('feira_id');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('feira_id')->references('id')->on('feiras');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
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
    }
};

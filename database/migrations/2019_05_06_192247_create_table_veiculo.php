<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa')->unique();
            $table->string('descricao');
            $table->string('cor')->nullable();
            $table->string('km')->nullable();
            $table->string('ano')->nullable();
            $table->bigInteger('proprietario_id')->unsigned();
            $table->foreign('proprietario_id')->references('id')->on('proprietarios');
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
        Schema::dropIfExists('veiculo');
    }
}

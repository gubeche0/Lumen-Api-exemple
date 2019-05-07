<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proprietario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('phone')->nullable();
            $table->string('cnh');
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
        Schema::dropIfExists('proprietario');
    }
}

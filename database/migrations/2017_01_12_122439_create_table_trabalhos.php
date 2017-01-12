<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTrabalhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhos', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string("autor", 100);
            $table->string("titulo", 100);
            $table->string("chaves", 50);
            $table->string("agencias", 50);
            $table->string("idioma", 25);
            $table->longText("trabalho");
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
        Schema::drop('trabalhos');
    }
}

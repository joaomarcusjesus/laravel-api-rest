<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('cpf', 50);
            $table->string('email', 100);
            $table->string('titulacao', 50);
            $table->string('instituicao', 50);
            $table->string('perfil', 50);
            $table->string('telefoneFixo', 25);
            $table->string('telefoneCelular', 25);
            $table->string('pagamento', 25);
            $table->string('login', 25);
            $table->string('password', 25);
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
        Schema::drop('inscritos');
    }
}

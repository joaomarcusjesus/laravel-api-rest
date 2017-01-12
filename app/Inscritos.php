<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscritos extends Model
{
    protected $fillable = [
        "nome",
        "cpf",
        "email",
        "titulacao",
        "instituicao",
        "perfil",
        "telefoneFixo",
        "telefoneCelular",
        "pagamento",
        "login",
        "password"
    ];

}

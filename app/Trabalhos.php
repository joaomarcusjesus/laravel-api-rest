<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabalhos extends Model
{
    protected $fillable = ["inscritos_id", "autor", "titulo", "chaves", "agencias", "idioma", "trabalho"];

}

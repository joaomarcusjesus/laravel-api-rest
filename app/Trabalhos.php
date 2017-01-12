<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabalhos extends Model
{
    protected $fillable = ["autor", "titulo", "chaves", "agencias", "idioma", "trabalho"];

}

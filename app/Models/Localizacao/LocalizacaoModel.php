<?php

namespace App\Models\Localizacao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalizacaoModel extends Model
{
    protected $table = 'localizacao';
    protected $fillable = ['pais','provincia', 'municipio', 'bairro'];

}


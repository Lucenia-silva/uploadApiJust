<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = 'cliente';
    protected $fillable = ['nome_empresa', 'nif', 'email', 'telefone', 'logo','id_localizacao','id_servico'];


    public function locals()
    {
     return $this->hasMany('App\Models\Localiazacao\LocalizacaooModel');

    }

    public function servicos()
    {
        return $this->belongsToMany('App\Models\Servico\ServicoModel', 'servico_cliente', 'id_cliente', 'id_servico');
    }

}



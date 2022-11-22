<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbCliente";
    protected $fillable = ['IdCliente','nome','dtNasc','estadoCivil', 'cidade', 'estado', 'endereco','numero','complemento','cep','rg','cpf','email','fone','celular']; //campos da tabela
    public $timestamps = false;
    protected $primaryKey = 'IdCliente';
}

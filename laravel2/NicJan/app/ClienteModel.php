<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbcliente";
    protected $fillable = ['idCliente','nome','dtNasc','estadoCivil', 'cidade', 'estado', 'endereco','numero','complemento','cep','rg','cpf','email','fone','celular']; //campos da tabela
    public $timestamps = false;

}
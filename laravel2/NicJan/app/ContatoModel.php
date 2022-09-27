<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    protected $table = "tbcontato";
    protected $fillable = ['idContato','nome','email','fone','assunto','mensagem']; //campos da tabela
    public $timestamps = false;

}

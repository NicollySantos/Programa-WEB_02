<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbproduto";
    protected $fillable = ['IdProduto','IdCategoria','produto','valor']; 
    public $timestamps = false;
    protected $primaryKey = 'IdProduto';
}

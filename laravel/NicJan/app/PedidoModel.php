<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbpedido";
        protected $fillable = ['codigo_compra','data/hora','cpf_cliente','valor total','tipo de pagamento']; //campos da tabela
        public $timestamps = false;
    
    }


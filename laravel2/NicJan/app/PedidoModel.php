<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbpedido";
        protected $fillable = ['codigo_compra','data_hora','cpf_cliente','valor_total','tipo_pagamento']; //campos da tabela
        public $timestamps = false;
    
    }


@extends('template.default')
    @section('content')
    <section>
    <div class="formulario" id="pedido">
            <h1 class="estilo-h1"> Pedido - Edição</h1>
            <form action="{{url('/pedido-alterar/'.$pedido->codigo_compra)}}" method="post">
               {{csrf_field()}} 
               <div >
                    <p>Código da Compra:</p>
                    <input type="text" placeholder="Ex:vaso" name="txCod" class="preencher" value="{{$pedido->codigo_compra}}"/>
                </div>
                <div >
                    <p>ID da Categoria:</p>
                    <input type="text" placeholder="Ex:vaso" name="txCategoria" class="preencher" value="{{$pedido->IdCategoria}}"/>
                </div>
                <div >
                    <p>ID do Produto:</p>
                    <input type="text" placeholder="Ex:vaso" name="txIdProduto" class="preencher" value="{{$pedido->IdProduto}}"/>
                </div>
                <div >
                    <p>ID do Cliente:</p>
                    <input type="text" placeholder="Ex:vaso" name="txIdCliente" class="preencher" value="{{$pedido->IdCliente}}"/>
                </div>

                <div >
                    <p>Data da compra:</p>
                    <input type="text" placeholder="Ex:2" name="txDat" class="preencher" value="{{$pedido->data_hora}}"/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text" placeholder="Ex:xxx.xxx.xx-x" name="txCPF" class="preencher" value="{{$pedido->cpf_cliente}}"/>
                </div>
                <div >
                    <p>Valor:</p>
                    <input type="text" placeholder="Ex:cartão" name="txValor" class="preencher" value="{{$pedido->valor_total}}"/>
                </div>
                <div >
                    <p>Tipo de pagamento:</p>
                    <input type="text" placeholder="Ex:cartão" name="txTipo" class="preencher" value="{{$pedido->tipo_pagamento}}"/>
                </div>
                <div>
                    <input type="submit" value="comprar" class="button"/>
                </div>
            </form>
        </div>

        
    </section>

    @endsection
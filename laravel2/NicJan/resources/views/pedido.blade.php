@extends('template.default')
@section('content')
    <section> 
     
        <div class="formulario" id="pedido">
            <h1 class="estilo-h1"> Fazer pedido </h1>
            <form action= "{{url('/pedido/inserir')}}" method="post">
            {!! csrf_field() !!}
                <div >
                    <p>Código da compra:</p>
                    <input type="text" placeholder="Ex:vaso" name="txCod" class="preencher" value="<?php echo @$_GET['codigo_compra'];?>"/>
                </div>

                <div >
                    <p>Data da compra:</p>
                    <input type="text" placeholder="Ex:2" name="txDat" class="preencher" value="<?php echo @$_GET['data_hora'];?>"/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text" placeholder="Ex:xxx.xxx.xx-x" name="txCPF" class="preencher" value="<?php echo @$_GET['cpf_cliente'];?>"/>
                </div>
                <div >
                    <p>Valor:</p>
                    <input type="text" placeholder="Ex:cartão" name="txValor" class="preencher" value="<?php echo @$_GET['valor_total'];?>"/>
                </div>
                <div >
                    <p>Tipo de pagamento:</p>
                    <input type="text" placeholder="Ex:cartão" name="txTipo" class="preencher" value="<?php echo @$_GET['tipo_pagamento'];?>"/>
                </div>
                <div>
                    <input type="submit" value="comprar" class="button"/>
                </div>
            </form>
        </div>
    </section> 
    <section>	
	<table border="1" class="tabela">
		<thead>
			<th> Código da compra </th>
			<th> Data da compra </th>
			<th> CPF </th>
            <th>Valor</th>
			<th> Tipo de Pagamento </th>
            <th>Excluir</th>
            @foreach($pedido as $c)
			<tr> 
                <td>{{$c->codigo_compra}}</td>
                <td>{{$c->data_hora}}</td>
                <td>{{$c->cpf_cliente}}</td>
                <td>{{$c->valor_total}}</td>
                <td>{{$c->tipo_pagamento}}</td>
                <td><a href="/pedido/{{$c->codigo_compra}}"> Excluir </a></td>
            </tr>

    	@endforeach	
		</thead>
		
	</table>	
</section>



@endsection
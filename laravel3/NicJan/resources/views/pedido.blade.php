@extends('template.default')
    @section('content')
   <section>
    <div class="formulario" id="pedido">
            <h1 class="estilo-h1"> Fazer pedido </h1>
            <form action= "{{url('/pedido/inserir')}}" method="post">
            {{csrf_field()}}
                <div >
                    <p>Código da Compra:</p>
                    <input type="text" placeholder="Ex:vaso" name="txCod" class="preencher" value=""/>
                </div>


                <div >
                    <p>Data da compra:</p>
                    <input type="text" placeholder="Ex:2" name="txDat" class="preencher" value=""/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text" placeholder="Ex:xxx.xxx.xx-x" name="txCPF" class="preencher" value=""/>
                </div>
                <div >
                    <p>Valor:</p>
                    <input type="text" placeholder="Ex:cartão" name="txValor" class="preencher" value=""/>
                </div>
                <div >
                    <p>Tipo de pagamento:</p>
                    <input type="text" placeholder="Ex:cartão" name="txTipo" class="preencher" value=""/>
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
            <th> Código da Compra </th>
            <th> Data da compra </th>
			<th> CPF </th>
            <th>Valor</th>
			<th> Tipo de Pagamento </th>
            <th>Excluir</th>
            <th>Editar</th>

            @foreach($pedido as $pe)
			<tr> 
                <td>{{$pe->codigo_compra}}</td>
                <td>{{$pe->data_hora}}</td>
                <td>{{$pe->cpf_cliente}}</td>
                <td>{{$pe->valor_total}}</td>
                <td>{{$pe->tipo_pagamento}}</td>
                <td><a href="/pedido/{{$pe->codigo_compra}}"> Excluir </a></td>
                <td><a href="/pedidoEditar/{{$pe->codigo_compra}}/editar">Editar</a></td>

            </tr>

    	@endforeach	
		</thead>
		
	</table>	
</section>



@endsection
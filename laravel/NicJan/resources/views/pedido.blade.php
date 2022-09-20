@extends('template.default')
@section('content')
    <section> 
     
        <div class="formulario" id="pedido">
            <h1 class="estilo-h1"> Fazer pedido </h1>
            <form action= "{{url('/pedido/inserir')}}" method="post">
                <div >
                    <p>Código da compra:</p>
                    <input type="text" placeholder="Ex:vaso" name="txCod" class="preencher" value="<?php echo @$_GET['cod'];?>"/>
                </div>

                <div >
                    <p>Data da compra:</p>
                    <input type="text" placeholder="Ex:2" name="txDat" class="preencher" value="<?php echo @$_GET['dat'];?>"/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text" placeholder="Ex:xxx.xxx.xx-x" name="txCPF" class="preencher" value="<?php echo @$_GET['cpf'];?>"/>
                </div>
                <div >
                    <p>Valor:</p>
                    <input type="text" placeholder="Ex:cartão" name="txVal" class="preencher" value="<?php echo @$_GET['valor'];?>"/>
                </div>
                <div >
                    <p>Tipo de pagamento:</p>
                    <input type="text" placeholder="Ex:cartão" name="txTipo" class="preencher" value="<?php echo @$_GET['tipo'];?>"/>
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
            @foreach($pedido as $c)
			<tr> 
                <td>{{$c->cod}}</td>
                <td>{{$c->dat}}</td>
                <td>{{$c->cpf}}</td>
                <td>{{$c->valor}}</td>
                <td>{{$c->tipo}}</td>
            </tr>

    	@endforeach	
		</thead>
		
	</table>	
</section>



@endsection
@extends('template.default')
@section('content')
    <section> 
       
        <div class="formulario" id="produto">
            <h1 class="estilo-h1"> Exibir produtos </h1>
            <form action= "{{url('/produto/inserir')}}" method="post">
			{!! csrf_field() !!}
            <div>
				<p>Id do Produto:</p>
				<input type="text" placeholder="Ex:chocolate" name="txIdProduto" class="preencher" value="<?php echo @$_GET['idProduto'];?>"/>
			</div>

			<div>
				<p>Id da Categoria:</p>
				<input type="text" placeholder="Ex:2" name="txIdCategoria" class="preencher"  value="<?php echo @$_GET['idCategoria'];?>"/>
			</div>

			<div >
				<p>Produto:</p>
			<input type="text" placeholder="Ex:8" name="txProduto" class="preencher"  value="<?php echo @$_GET['produto'];?>"/>	

			</div>
			<div>
				<p>Valor:</p>
				<input type="text" placeholder="9" name="txValor" class="preencher" value="<?php echo @$_GET['valor'];?>">
			</div>
			<div>
				<input type="submit" value="Salvar" class="button"/>
			</div>
		</form>

    </section> 
	<section>	
	
	<table border="1" class="tabela">
		<thead>
			
			<th> Id Produto </th>
			<th> Id Categoria </th>
			<th> Produto </th>
			<th> Valor </th>
			
			<th>Excluir</th>
			@foreach($produto as $c)
				<tr> 
					<td>{{$c->idProduto}}</td>
					<td>{{$c->idCategoria}}</td>
					<td>{{$c->produto}}</td>
					<td>{{$c->valor}}</td>
					<td><a href="/produto/{{$c->idProduto}}"> Excluir </a></td>
				
				</tr>

    		@endforeach	
		</thead>
		
	</table>	
</section>

@endsection
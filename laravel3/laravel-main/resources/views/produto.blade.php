@extends('template.default')
    @section('content')
    <section >
    <div class="formulario" id="produto">
            <h1 class="estilo-h1"> Produtos - Edição</h1>
            <form action="{{url('/produto-alterar/'.$produto->IdProduto)}}" method="post">
               {{csrf_field()}} 
               <div>
				<p>Id do Produto:</p>
				<input type="text" placeholder="Ex:chocolate" name="txIdProduto" class="preencher" value=""/>
			</div>

			<div>
				<p>Id da Categoria:</p>
				<input type="text" placeholder="Ex:2" name="txIdCategoria" class="preencher"  value=""/>
			</div>

			<div >
				<p>Produto:</p>
			<input type="text" placeholder="Ex:8" name="txProduto" class="preencher"  value=""/>	

			</div>
			<div>
				<p>Valor:</p>
				<input type="text" placeholder="9" name="txValor" class="preencher" value="">
			</div>
			<div>
				<input type="submit" value="Salvar" class="button"/>
			</div>
            </form>
        </div>


        
    </section>
    <section>	
	
	<table border="1" class="tabela">
		<thead>
			
			<th> Id Produto </th>
			<th> Id Categoria </th>
			<th> Produto </th>
			<th> Valor </th>
			<th>Excluir</th>
			<th>Editar</th>
			@foreach($p as $p)
				<tr> 
					<td>{{$p->IdProduto}}</td>
					<td>{{$p->IdCategoria}}</td>
					<td>{{$p->produto}}</td>
					<td>{{$p->valor}}</td>
					<td><a href="/produto/{{$p->IdProduto}}"> Excluir </a></td>
					<td><a href="/produtoEditar/{{$p->IdProduto}}/editar">Editar</a></td>

					
				
				</tr>

    		@endforeach	
		</thead>
		
	</table>	
</section>
    @endsection

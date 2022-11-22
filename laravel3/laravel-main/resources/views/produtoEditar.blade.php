@extends('template.default')
    @section('content')
    <section >
    <div class="formulario" id="produto">
            <h1 class="estilo-h1"> Produto - Edição</h1>
            <form action="{{url('/produto-alterar/'.$produto->IdProduto)}}" method="post">
               {{csrf_field()}} 
               <div>
				<p>Id do Produto:</p>
				<input type="text" placeholder="Ex:chocolate" name="txIdProduto" class="preencher" value="{{$produto->idProduto}}"/>
			</div>

			<div>
				<p>Id da Categoria:</p>
				<input type="text" placeholder="Ex:2" name="txIdCategoria" class="preencher"  value="{{$produto->idCategoria}}"/>
			</div>

			<div >
				<p>Produto:</p>
			<input type="text" placeholder="Ex:8" name="txProduto" class="preencher"  value="{{$produto->produto}}"/>	

			</div>
			<div>
				<p>Valor:</p>
				<input type="text" placeholder="9" name="txValor" class="preencher" value="{{$produto->valor}}">
			</div>
			<div>
				<input type="submit" value="Salvar" class="button"/>
			</div>

            </form>
        </div>
    
    </section>
    @endsection
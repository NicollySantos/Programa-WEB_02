@extends('template.default')
@section('content')
    <section> 
 
        <div class="formulario" id="categoria">
            <h1 class="estilo-h1"> Exibir Categorias </h1>
            <form action= "{{url('/categoria/inserir')}}"method="post">
            {{csrf_field()}}

                <div >
                    <p>Id:</p>
                    <input type="text" placeholder="Ex:4" name="txIdCategoria" class="preencher" value="<?php echo @$_GET['idCategoria'];?>"/>
                </div>

                <div >
                    <p>Categoria:</p>
                    <input type="text" placeholder="Ex:Carro" name="txCategoria" class="preencher" value="<?php echo @$_GET['categoria'];?>"/>
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
        <th>Id</th>
        <th>Categoria</th>
        <th>Excluir</th>
        @foreach($categoria as $c)
			<tr> 
                <td>{{$c->idCategoria}} </td>
                <td>{{$c->categoria}}</td>
                <td><a href="/categoria/{{$c->idCategoria}}"> Excluir </a></td>
            </tr>

    	@endforeach	
    
		</thead>
	</table>
  


</section>



@endsection
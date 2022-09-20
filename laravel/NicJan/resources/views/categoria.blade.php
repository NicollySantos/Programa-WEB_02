@extends('template.default')
@section('content')
    <section> 
 
        <div class="formulario" id="categoria">
            <h1 class="estilo-h1"> Exibir Categorias </h1>
            <form action= "{{url('/categoria/inserir')}}"method="post">
                <div >
                    <p>Id:</p>
                    <input type="text" placeholder="Ex:4" name="txIdCategoria" class="preencher" value="<?php echo @$_GET['id'];?>"/>
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
        @foreach($categoria as $c)
			<tr> 
                <td>{{$c->idCategoria}} </td>
                <td>{{$c->categoria}}</td>
            </tr>

    	@endforeach	
    
		</thead>
	</table>
  


</section>



@endsection
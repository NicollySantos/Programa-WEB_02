@extends('template.default')
    @section('content')
    <section>
    <div class="formulario" id="categoria">
            <h1 class="estilo-h1"> Exibir Categorias </h1>
            <form action= "{{url('/categoria/inserir')}}"method="post">
            {{csrf_field()}}

                <div >
                <p>Id:</p>
                    <input type="text" placeholder="Categoria" name="txIdCategoria" class="preencher" value=""/>
                </div>

                <div>
                <p>Categoria:</p>
                    <input  class="preencher" type="text" placeholder="Categoria" name="txCategoria" value=""/>
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
    <th>Editar</th>
    @foreach($categoria as $cat)
        <tr> 
            <td>{{$cat->IdCategoria}} </td>
            <td>{{$cat->categoria}}</td>
            <td><a href="/categoria/{{$cat->IdCategoria}}"> Excluir </a></td>
            <td><a href="/categoriaEditar/{{$cat->IdCategoria}}/editar">Editar</a></td>
        </tr>

    @endforeach	

    </thead>
</table>



</section>
        

    @endsection
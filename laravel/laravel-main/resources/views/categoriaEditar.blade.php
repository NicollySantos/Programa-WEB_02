@extends('template.default')
    @section('content')
    <section>
    <div class="formulario" id="categoria">
            <h1 class="estilo-h1"> Categorias - Edição</h1>
            <form action="{{url('/categoria-alterar/'.$categoria->IdCategoria)}}" method="post">
               {{csrf_field()}} 
                <div >
                <p>Id:</p>
                    <input type="text" placeholder="Categoria" name="txIdCategoria" class="preencher" value="{{$categoria->IdCategoria}}"/>
                </div>

                <div>
                <p>Categoria:</p>
                    <input  class="preencher" type="text" placeholder="Categoria" name="txCategoria" value="{{$categoria->categoria}}"/>
                </div>


                <div>
                    <input type="submit" value="Salvar" class="button"/>
                </div>  

            </form> 
    </div>
  
    </section>

    @endsection
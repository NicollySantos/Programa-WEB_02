@extends('template.default')
    @section('content')
    <section> 
    
   
    <div class="formulario" id="contato">
    <h1 class="estilo-h1"> Contato </h1>

    <form action= "{{url('/contato/inserir')}}" method="post" >
    {{csrf_field()}}
    <div>
        <p>ID:</p>
            <input type="text" name="txIdContato" placeholder="IdContato" class="preencher" value="" />
        </div>
    <div>
        <p>Nome:</p>
            <input type="text" name="txNome" placeholder="Nome" class="preencher" value="" />
        </div>
        <div>
        <p>E-mail:</p>
            <input type="text" name="txEmail" placeholder="E-mail" class="preencher" value=""/>
        </div>
        <div>
        <p>Telefone:</p>
            <input type="text" name="txFone" placeholder="Telefone" class="preencher" value="" />
        </div>
        <div>
        <p>Assunto:</p>
            <input type="text" name="txAssunto" placeholder="Assunto" class="preencher" value="" />
        </div>
        <div>
        <p>Mensagem:</p>
            <textarea name="txMensagem" placeholder="Mensagem" value="" class="preencher"></textarea>
        </div>

        <div>
            <input type="submit" value="Salvar" class="button" />
        </div>
    </form> 

    <section>	

    <section>	
 
    <table border="1" class="tabela">
		
        <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Assunto</th>
        <th>Excluir</th>
        <th>Editar</th>
        @foreach($contato as $c)
			<tr> 
                <td> {{$contato->idContato}} </td>
                <td>{{$c->nome}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->fone}}</td>
                <td>{{$c->assunto}}</td>
                <td><a href="/contato/{{$c->IdContato}}"> Excluir </a></td>
                <td><a href="/contatoEditar/{{$c->IdContato}}/editar">Editar</a></td>

            </tr>

    	@endforeach	
  
		</thead>
	</table>
    
    </section>

    @endsection
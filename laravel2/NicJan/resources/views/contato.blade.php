@extends('template.default')
@section('content')
    <section> 
    
   
        <div class="formulario" id="contato">
        <h1 class="estilo-h1"> Contato </h1>

        <form action= "{{url('/contato/inserir')}}" method="post" >
        {{csrf_field()}}

            <div>
            <p>Nome:</p>
                <input type="text" name="txNome" placeholder="Nome" class="preencher" value="<?php echo @$_GET['nome'];?>" />
            </div>
            <div>
            <p>E-mail:</p>
                <input type="text" name="txEmail" placeholder="E-mail" class="preencher" value="<?php echo @$_GET['email'];?>"/>
            </div>
            <div>
            <p>Telefone:</p>
                <input type="text" name="txFone" placeholder="Telefone" class="preencher" value="<?php echo @$_GET['fone'];?>" />
            </div>
            <div>
            <p>Assunto:</p>
                <input type="text" name="txAssunto" placeholder="Assunto" class="preencher" value="<?php echo @$_GET['assunto'];?>" />
            </div>
            <div>
            <p>Mensagem:</p>
                <textarea name="txMensagem" placeholder="Mensagem" value="<?php echo @$_GET['mensagem'];?>" class="preencher"></textarea>
            </div>

            <div>
                <input type="submit" value="Salvar" class="button" />
            </div>
        </form> 
  
  
        <table border="1" class="tabela">
		
        <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Assunto</th>
        <th>Excluir</th>
        @foreach($contato as $c)
			<tr> 
                <td> {{$c->idContato}} </td>
                <td>{{$c->nome}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->fone}}</td>
                <td>{{$c->assunto}}</td>
                <td><a href="/contato/{{$c->idContato}}"> Excluir </a></td>

            </tr>

    	@endforeach	
  
		</thead>
	</table>
    </section>

  
   
@endsection 
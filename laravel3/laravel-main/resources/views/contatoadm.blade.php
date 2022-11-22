@extends('template.default')
    @section('content')
    <section>
    <h1 class="titulo">Contato - ADMINISTRADOR </h1>
        
    <section>	

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
                        <td><a href="/contatoEditar/{{$c->idContato}}/editar">Editar</a></td>
        
                    </tr>
        
                    @endforeach	
          
                        </thead>
                </table>
            </section>
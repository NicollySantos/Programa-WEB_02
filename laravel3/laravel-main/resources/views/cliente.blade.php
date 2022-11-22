@extends('template.default')
    @section('content')
    <section>
    <div class="formulario" id="cliente">
            <h1 class="estilo-h1"> Cliente  </h1> 
            <form action= "{{url('/cliente/inserir')}}" method="post">
            {{csrf_field()}}
            <div >
                    <p>Id do Cliente:</p>
                    <input type="text" name="txIdCliente" class="preencher" value="" />
                </div>
            <div >
                    <p>Nome:</p>
                    <input type="text" name="txNome" class="preencher" value="" />
                </div>
             
                <div >
                    <p>Data de Nascimento:</p>
                    <input type="text"  name="txDat" class="preencher" value=""/>
                </div>
                <div >
                    <p>Estado Civil:</p>
                    <input type="text"  name="txEst" class="preencher" value=""/>
                </div>
      
                <div>
                    <p>Cidade:</p>
                    <input type="text"  name="txCid" class="preencher" value=""/>
                </div>
                <div>
                    <p>Estado:</p>
                    <input type="text"  name="txEst" class="preencher" value=""/>
                </div>
                <div>
                <p>Endereço:</p>
                    <input type="text"  name="txEnd" class="preencher" value="I"/>
                </div>
                <div >
                    <p>Número:</p>
                    <input type="text"  name="txNum" class="preencher" value=""/>
                </div>
                <div >
                    <p>Complemento:</p>
                    <input type="text"  name="txCom" class="preencher" value=""/>
                </div>
                <div >
                    <p>CEP:</p>
                    <input type="text"  name="txCep" class="preencher" value= ""/>
                </div>
                <div >
                    <p>RG:</p>
                    <input type="text"  name="txRg" class="preencher" value=""/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text"  name="txCpf" class="preencher" value=""/>
                </div>
                <div >
                    <p>E-mail:</p>
                    <input type="text"  name="txEmail" class="preencher" value=""/>
                </div>
                <div>
                <p>Telefone:</p>
                    <input type="text"  name="txFone" class="preencher" value=""/>
                </div>
                <div>
                <p>celular:</p>
                    <input type="text"  name="txCel" class="preencher" value=""/>
                </div>
                <div>
                    <input type="submit" value="Salvar" class="button"/>
                </div>
      

            </form>
        </div>
        <section>	

	
    <table border="1" class="tabela">
		
        <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Estado Civil</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Endereço</th>
        <th>Número</th>
        <th>Complemento</th>
        <th>CEP</th>
        <th>RG</th>
        <th>CPF</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Excluir</th>
        <th>Editar</th>

        @foreach($cliente as $cli)
			<tr> 
                <td>{{$cli->idCliente}} </td>
                <td>{{$cli->nome}}</td>
                <td>{{$cli->dtNasc}}</td>
                <td>{{$cli->estadoCivil}}</td>
                <td>{{$cli->cidade}}</td>
                <td>{{$cli->estado}}</td>
                <td>{{$cli->endereco}}</td>
                <td>{{$cli->numero}}</td>
                <td>{{$cli->complemento}}</td>
                <td>{{$cli->cep}}</td>
                <td>{{$cli->rg}}</td>
                <td>{{$cli->cpf}}</td>
                <td>{{$cli->email}}</td>
                <td>{{$cli->fone}}</td>
                <td>{{$cli->celular}}</td>
                <td><a href="/cliente/{{$cli->IdCliente}}"> Excluir </a></td>
                <td><a href="/clienteEditar/{{$cli->IdCliente}}/editar">Editar</a></td>
            </tr>

    	@endforeach	
    
		</thead>
	</table>
  


</section>

@endsection
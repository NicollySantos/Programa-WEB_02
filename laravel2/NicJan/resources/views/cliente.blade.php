@extends('template.default')
@section('content')
    <section> 
     
        <div class="formulario" id="cliente">
            <h1 class="estilo-h1"> Cadastro  </h1> 
            <form action= "{{url('/cliente/inserir')}}" method="post">
            {{csrf_field()}}
                        <div >
                    
                <div >
                    <p>Nome:</p>
                    <input type="text" name="txNome" class="preencher" required/>
                </div>

                <div >
                    <p>Data de Nascimento:</p>
                    <input type="text"  name="txDat" class="preencher" required/>
                </div>
                <div >
                    <p>Estado Civil:</p>
                    <input type="text"  name="txEst" class="preencher" required/>
                </div>
                <div>
                    <p>Cidade:</p>
                    <input type="text"  name="txCid" class="preencher" required/>
                </div>
                <div>
                    <p>Estado:</p>
                    <input type="text"  name="txEst" class="preencher" required/>
                </div>
                <div>
                <p>Endereço:</p>
                    <input type="text"  name="txEnd" class="preencher" required/>
                </div>
                <div >
                    <p>Número:</p>
                    <input type="text"  name="txNum" class="preencher" required/>
                </div>
                <div >
                    <p>Complemento:</p>
                    <input type="text"  name="txCom" class="preencher" required/>
                </div>
                <div >
                    <p>CEP:</p>
                    <input type="text"  name="txCep" class="preencher" required/>
                </div>
                <div >
                    <p>RG:</p>
                    <input type="text"  name="txRg" class="preencher" required/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text"  name="txCpf" class="preencher" required/>
                </div>
                <div >
                    <p>E-mail:</p>
                    <input type="text"  name="txEmail" class="preencher" required/>
                </div>
                <div>
                <p>Telefone:</p>
                    <input type="text"  name="txFone" class="preencher" required/>
                </div>
                <div>
                <p>celular:</p>
                    <input type="text"  name="txCel" class="preencher" required/>
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

        @foreach($cliente as $c)
			<tr> 
                <td>{{$c->idCliente}} </td>
                <td>{{$c->nome}}</td>
                <td>{{$c->dtNasc}}</td>
                <td>{{$c->estadoCivil}}</td>
                <td>{{$c->cidade}}</td>
                <td>{{$c->estado}}</td>
                <td>{{$c->endereco}}</td>
                <td>{{$c->numero}}</td>
                <td>{{$c->complemento}}</td>
                <td>{{$c->cep}}</td>
                <td>{{$c->rg}}</td>
                <td>{{$c->cpf}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->fone}}</td>
                <td>{{$c->celular}}</td>
                <td><a href="/cliente/{{$c->idCliente}}"> Excluir </a></td>

            </tr>

    	@endforeach	
    
		</thead>
	</table>
  


</section>

@endsection
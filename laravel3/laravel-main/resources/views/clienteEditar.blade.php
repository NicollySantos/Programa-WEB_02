@extends('template.default')
    @section('content')
    <section>
    <div class="formulario" id="cliente">
            <h1 class="estilo-h1"> Cliente - Edição</h1>
            <form action="{{url('/cliente-alterar/'.$cliente->IdCliente)}}" method="post">
               {{csrf_field()}} 
        <div >
                    <p>Nome:</p>
                    <input type="text" name="txNome" class="preencher" required/>
                </div>

                <div >
                    <p>Data de Nascimento:</p>
                    <input type="text"  name="txDat" class="preencher" value="{{$cliente->dtNasc}}"/>
                </div>
                <div >
                    <p>Estado Civil:</p>
                    <input type="text"  name="txEst" class="preencher" value="{{$cliente->estadoCivil}}"/>
                </div>
                <div>
                    <p>Cidade:</p>
                    <input type="text"  name="txCid" class="preencher" value="{{$cliente->cidade}}"/>
                </div>
                <div>
                    <p>Estado:</p>
                    <input type="text"  name="txEst" class="preencher" value="{{$cliente->estado}}"/>
                </div>
                <div>
                <p>Endereço:</p>
                    <input type="text"  name="txEnd" class="preencher" value="{{$cliente->endereco}}"/>
                </div>
                <div >
                    <p>Número:</p>
                    <input type="text"  name="txNum" class="preencher" value="{{$cliente->numero}}"/>
                </div>
                <div >
                    <p>Complemento:</p>
                    <input type="text"  name="txCom" class="preencher" value="{{$cliente->complemento}}"/>
                </div>
                <div >
                    <p>CEP:</p>
                    <input type="text"  name="txCep" class="preencher" value="{{$cliente->cep}}"/>
                </div>
                <div >
                    <p>RG:</p>
                    <input type="text"  name="txRg" class="preencher" value="{{$cliente->rg}}"/>
                </div>
                <div >
                    <p>CPF:</p>
                    <input type="text"  name="txCpf" class="preencher" value="{{$cliente->cpf}}"/>
                </div>
                <div >
                    <p>E-mail:</p>
                    <input type="text"  name="txEmail" class="preencher" value="{{$cliente->email}}"/>
                </div>
                <div>
                <p>Telefone:</p>
                    <input type="text"  name="txFone" class="preencher" value="{{$cliente->fone}}"/>
                </div>
                <div>
                <p>celular:</p>
                    <input type="text"  name="txCel" class="preencher" value="{{$cliente->celular}}"/>
                </div>
                <div>
                    <input type="submit" value="Salvar" class="button"/>
                </div>
            </form>
        </div>
        
    </section>

    @endsection
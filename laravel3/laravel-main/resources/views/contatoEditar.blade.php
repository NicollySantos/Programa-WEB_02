@extends('template.default')
    @section('content')
    <section>
    <div class="formulario" id="contato">
        <h1 class="estilo-h1"> Contato </h1>

        <form action="{{url('/contatoEditar/editar')}}" method="post">
        {{csrf_field()}}

            <div>
            <p>Nome:</p>
                <input type="text" name="txNome" placeholder="Nome" class="preencher" value="{{$contato->nome}}" />
            </div>
            <div>
            <p>E-mail:</p>
                <input type="text" name="txEmail" placeholder="E-mail" class="preencher" value="{{$contato->email}}"/>
            </div>
            <div>
            <p>Telefone:</p>
                <input type="text" name="txFone" placeholder="Telefone" class="preencher" value="{{$contato->fone}}" />
            </div>
            <div>
            <p>Assunto:</p>
                <input type="text" name="txAssunto" placeholder="Assunto" class="preencher" value="{{$contato->assunto}}" />
            </div>
            <div>
            <p>Mensagem:</p>
                <textarea name="txMensagem" placeholder="Mensagem" value="{{$contato->mensagem}}" class="preencher"></textarea>
            </div>

            <div>
                <input type="submit" value="Salvar" class="button" />
            </div>
            </form>
        </div>
    </section> 

    @endsection
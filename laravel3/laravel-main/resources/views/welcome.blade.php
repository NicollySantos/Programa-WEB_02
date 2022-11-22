    @extends('template.default')
    @section('content')
    
    <section>
    {{csrf_field()}}	
        <div>
        <h1>Home</h1>
        <main class="row">
			<div class="column side" style="background-color:#2F755E;">
                <p> Pesquisar Produto</p>
			</div>
			
			<!-- <div class="column middle" style="background-color:#5DE0B5;">
                <img src="{{url('assets/image.jpeg')}}" alt="compra">   
            </div> -->
		
					
				

		<form action="{{url('/welcome/pesquisa')}}" method="post">	
		    {!! csrf_field() !!}
        
               
                <div>
				<input type="text" class="preencher" name="txProduto" placeholder="Produto" /> <br>
			</div>

			<div>
				<input type="number" class="preencher"name="valorMin" placeholder="Valor Min." /> <br>
			</div>

			<div>
				<input type="number" class="preencher" name="valorMax" placeholder="Valor Max." /> <br>
			</div>

            <div>
                    <input type="submit" value="Pesquisar" class="button"/>
                </div>
		</form>
	</div>
    </div>
			</aside>
		</main>
	@isset($produto)
    @foreach($produto as $p)
            <div>
            <p> IdCategoria: {{$p->IdCategoria}} </p>
            <p> IdProduto: {{$p->IdProduto}} </p>
            <h1>Produto: {{$p->produto}} </h1>
            <p> Valor: {{$p->valor}} </p>
            </div>
            @endforeach
	@endisset

    </section>
        
    @endsection

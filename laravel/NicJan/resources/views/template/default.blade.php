<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

<header>
    <nav>
       
        <ul> 
            <li><a href="/">Home</a></li>
            <li><a href="/categoria">Categoria</a></li>
            <li><a href="/produto">Produto</a></li>
            <li><a href="/cliente">Cliente</a></li>
            <li><a href="/pedido">Pedido</a></li>
            <b><li style="float:right"><a class="active" href="/contato">Contato</a></li></b>


        </ul>
    </nav>
<!--<img src="{{url('assets/nuvem.png')}}" alt="nuvem">-->
</header>
   <i>@yield('content')</i> 
    
   
</body>
</html>
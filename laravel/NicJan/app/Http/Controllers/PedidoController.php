<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PedidoModel;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $contato = ContatoModel::all();
        
    //    echo "Contato";
    //    foreach($contato as $c){
    //         echo "<h1> Id ". $c->idContato . "</h1><br />"; 
    //         echo "Nome ".$c->nome . "<br />"; 
    //         echo "E-mail ".$c->email . "<br />"; 
    //         echo "Fone ".$c->fone . "<br />"; 
    //         echo "Assunto ".$c->assunto . "<br />"; 
    //         echo "Mensagem".$c->mensagem . "<br />"; 
    //         echo "<br />"; 
    //    }
        
    $pedido = PedidoModel::all();
    return view ('pedido', compact('pedido'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
        $pedido = new PedidoModel();
        $pedido -> cod = $request->txCod;
        $pedido -> dat = $request->txDat;
        $pedido -> cpf = $request->txCPF;
        $pedido -> valor = $request->txValor;
        $pedido -> tipo = $request->txTipo;
        $pedido -> save();
        return redirect("/pedido");
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

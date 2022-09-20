<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClienteModel;

class ClienteController extends Controller
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
        
    $cliente = ClienteModel::all();
    return view ('cliente', compact('cliente'));
            
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
        $cliente = new ClienteModel();
        $cliente -> nome = $request->txNome;
        $cliente -> data = $request->txDat;
        $cliente -> estadociv = $request->txEst;
        $cliente -> cidade = $request->txCid;
        $cliente -> endereco = $request->txEnd;
        $cliente -> numero = $request->txNum;
        $cliente -> complemento = $request->txCom;
        $cliente -> cep = $request->txCep;
        $cliente -> rg = $request->txRg;
        $cliente -> cpf = $request->txCpf;
        $cliente -> email = $request->txEmail;
        $cliente -> fone = $request->txFone;
        $cliente -> celular = $request->txCel;
        $cliente -> save();
    return redirect("/cliente");
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

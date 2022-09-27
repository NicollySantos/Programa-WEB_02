<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContatoModel;

class ContatoController extends Controller
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
        
    $contato = ContatoModel::all();
    return view ('contato', compact('contato'));
            
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
        $contato = new ContatoModel();
        $contato -> idContato = $request->txIdContato;
        $contato -> nome = $request->txNome;
        $contato -> email = $request->txEmail;
        $contato -> fone = $request->txFone;
        $contato -> assunto = $request->txAssunto;
        $contato -> mensagem = $request->txMensagem;
        $contato -> save();
    return redirect("/contato");
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
    ContatoModel::where('idContato',$id)->delete();
    return redirect("/contato");
    }

}

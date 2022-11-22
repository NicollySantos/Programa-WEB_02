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
        $cliente = ClienteModel::all();
        return view('cliente',compact('cliente'));
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
        $cliente-> IdCliente = $request->txIdCliente;
        $cliente -> nome = $request->txNome;
        $cliente -> dtNasc = $request->txDat;
        $cliente -> estadoCivil = $request->txEst;
        $cliente -> cidade = $request->txCid;
        $cliente -> estado = $request->txEsta;
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
        $cliente = ClienteModel::find($id);
        $title = "Editar Cliente -  {$cliente->IdCliente}, {$cliente->nome}, {$cliente->dtNasc}, {$cliente->estadoCivil}, {$cliente->cidade}, 
        {$cliente->estado}, {$cliente->endereco}, {$cliente->numero}, {$cliente->complemento}, {$cliente->cep},
        {$cliente->rg}, {$cliente->cpf}, {$cliente->email}, {$cliente->fone}, {$cliente->celular}";
        return view('clienteEditar', compact('title', 'cliente'));
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
        $cliente = ClienteModel::find($id);
        $cliente->update(['IdCliente'=>$request->ixIdCliente]);
        $cliente->update(['nome'=>$request->txNome]);
        $cliente->update(['dtNasc'=>$request->txDat]);
        $cliente->update(['estadoCivil'=>$request->txEst]);
        $cliente->update(['cidade'=>$request->txCid]);
        $cliente->update(['estado'=>$request->txEsta]);
        $cliente->update(['endereco'=>$request->txEnd]);
        $cliente->update(['numero'=>$request->txNum]);
        $cliente->update(['complemento'=>$request->txCom]);
        $cliente->update(['cep'=>$request->txCep]);
        $cliente->update(['rg'=>$request->txRg]);
        $cliente->update(['cpf_cliente'=>$request->txCPF]);
        $cliente->update(['email'=>$request->txEmail]);
        $cliente->update(['fone'=>$request->txFone]);
        $cliente->update(['celular'=>$request->txCel]);
        return redirect("/cliente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClienteModel::where('idCliente',$id)->delete();
        return redirect("/cliente");
    }
}

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
        $pedido = PedidoModel::all();
        return view('pedido',compact('pedido'));
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
        $pedido -> codigo_compra = $request->txCod;
        $pedido -> data_hora = $request->txDat;
        $pedido -> cpf_cliente = $request->txCPF;
        $pedido -> valor_total = $request->txValor;
        $pedido -> tipo_pagamento = $request->txTipo;
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
        $pedido = PedidoModel::find($id);
        $title = "Editar Pedido - {$pedido->codigo_compra}, {$pedido->data_hora}, {$pedido->cpf_cliente}, {$pedido->valor_total}, {$pedido->tipo_pagamento}";
        return view('pedidoEditar', compact('title', 'pedido'));
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
        $pedido = PedidoModel::find($id);
        $pedido->update(['codigo_compra'=>$request->txCod]);
        $pedido->update(['data_hora'=>$request->txDat]);
        $pedido->update(['cpf_cliente'=>$request->txCPF]);
        $pedido->update(['valor_total'=>$request->txValor]);
        $pedido->update(['tipo_pagamento'=>$request->txTipo]);
        return redirect("/pedido");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PedidoModel::where('codigo_compra',$id)->delete();
        return redirect("/pedido");
    }
}

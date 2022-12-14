<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaModel;

class CategoriaController extends Controller
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
        
    $categoria = CategoriaModel::all();
    return view ('categoria', compact('categoria'));
            
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
        
            $categoria = new CategoriaModel();
            $categoria -> idCategoria = $request->txIdCategoria;
            $categoria -> categoria = $request->txCategoria;
            
            $categoria -> save();
        return redirect("/categoria");
        
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        CategoriaModel::where('idCategoria',$id)->delete();
        return redirect("/categoria");
        }
}

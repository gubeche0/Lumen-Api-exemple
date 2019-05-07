<?php

namespace App\Http\Controllers;

use App\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{

    public function list(){
        $veiculos = Veiculo::all();
        return response()->json($veiculos);
    }

    public function store(Request $request)
    {
        return json_encode($request->all());
        $veiculo = new Veiculo($request->all());
        $veiculo->save();
        return response()->json($veiculo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = Veiculo::find($id);
        return response()->json($veiculo);
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
        $veiculo = Veiculo::find($id);
        if($veiculo){
            $veiculo->fill($request->all());
            $veiculo->save();
            return response()->json($veiculo::find($id));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        if($veiculo){
            $veiculo->delete();
        }
        return response()->json($veiculo);
    }



}

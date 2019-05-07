<?php

namespace App\Http\Controllers;

use App\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{


    public function list(){
        $proprietarios = Proprietario::all();
        return response()->json($proprietarios);
    }

    public function store(Request $request)
    {
        $proprietario = new Proprietario($request->all());
        $proprietario->save();
        return response()->json($proprietario);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prop = Proprietario::find($id);
        return response()->json($prop);
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
        $prop = Proprietario::find($id);
        if($prop){
            $prop->fill($request->all());
            $prop->save();
            return response()->json($prop::find($id));
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
        $prop = Proprietario::find($id);
        if($prop){
            $prop->delete();
        }
        return response()->json($prop);
    }
    
}

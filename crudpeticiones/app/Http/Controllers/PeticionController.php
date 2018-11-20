<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peticion;
class PeticionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $peticiones=Peticion::orderBy('id','DESC')->paginate(3);
        return view('Peticion.index',compact('peticiones'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Peticion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $this->validate($request,[ 'nombre'=>'required', 'documento'=>'required', 'correo'=>'required', 'direccion'=>'required', 'telefono'=>'required',  'motivo'=>'required']);
        Peticion::create($request->all());
        return redirect()->route('peticion.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peticiones=Peticion::find($id);
        return  view('peticion.show',compact('peticiones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $peticion=Peticion::find($id);
        return view('peticion.edit',compact('peticion'));
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
     $this->validate($request,[ 'nombre'=>'required', 'documento'=>'required', 'correo'=>'required', 'direccion'=>'required', 'telefono'=>'required', 'motivo'=>'required']);
 
        Peticion::find($id)->update($request->all());
        return redirect()->route('peticion.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Peticion::find($id)->delete();
        return redirect()->route('peticion.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

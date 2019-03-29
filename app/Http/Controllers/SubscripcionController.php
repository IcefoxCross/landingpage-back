<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscripcion;
use DB;
use Validator;

class SubscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*$request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|unique:subscripcions'
        ]);*/

        $validator = Validator::make($request->all(),[
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|unique:subscripcions'
        ]);

        if ($validator->fails()){
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        $sub = new Subscripcion;
        $sub->nombre = $request->input('nombre');
        $sub->apellido = $request->input('apellido');
        $sub->email = $request->input('email');
        $sub->save();

        return redirect('/')->with('success','Gracias por subscribirte! Te acabamos de enviar un mail para confirmar.');
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

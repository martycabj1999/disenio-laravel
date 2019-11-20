<?php

namespace App\Http\Controllers;

use App\Matter;
use App\Year;
use App\Department;
use Illuminate\Http\Request;

class MatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matters= Matter::paginate();
        $years= Year::paginate();
        $departments= Department::paginate();
        return view('materia/list',compact('matters', 'years', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matters= Matter::all();
        $years= Year::all();
        $departments= Department::all();
        return view('materia/create',compact('matters','years', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name'   => ['required']
            ]);
            $datos = request()->all();                            //traes todos los parametros que le pase de la pagina de alta
            Matter::create($datos);
            return redirect()->to('materia');
    }

    public function storeEdit($id_materia) {
        $this->validate(request(),[
            'name'   => ['required']
            ]);
        $datos = request()->all();
        unset($datos['_token']);
        Matter::where('id', $id_materia)->update($datos);
        return redirect()->to('materia');                      //retorna de nuevo a la pagina usuario
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function show(Matter $matter)
    {
        return Matter::where('id', $matter->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function edit($id_materia) {
        $matter=Matter::find($id_materia);
        $years= Year::all();
        $departments= Department::all();
        return view('materia/edit',compact('matter','years','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matter $matter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matter  $matter
     * @return \Illuminate\Http\Response
     */
    public function delete($id_materia)
    {
        Matter::destroy($id_materia);
        return redirect()->to('materia');
    }
}

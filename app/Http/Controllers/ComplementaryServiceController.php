<?php

namespace App\Http\Controllers;

use App\ComplementaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplementaryServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complementaryServices= ComplementaryService::paginate();
        return view('serviciocomplementario/list',compact('complementaryServices')); //Busca la ruta de la vista 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!(Auth::User()->is_student)){
            return view('serviciocomplementario/create');
            } else {
                return view('404');
            }
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
            'name'   => ['required'],
            'amount'    => ['required']
            ]);
    
            $datos = request()->all();
    
            ComplementaryService::create($datos);//crea o actualiza el usuario
            
            return redirect()->to('serviciocomplementario');
    }

    public function storeEdit($id_servicio_complementario) {
        $this->validate(request(),[
        'name'   => ['required'],
        'amount'    => ['required']
        ]);

        $datos = request()->all();

        //replace es una funcion que sirve para buscar un string y reemplazarlo
        unset($datos['_token']);
        ComplementaryService::where('id', $id_servicio_complementario)->update($datos);//crea o actualiza el usuario
        //return $password;
        //Mail para la Contraseña//

        return redirect()->to('serviciocomplementario');                      //retorna de nuevo a la pagina usuario
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComplementaryService  $complementaryService
     * @return \Illuminate\Http\Response
     */
    public function show(ComplementaryService $complementaryService)
    {
        return ComplementaryService::where('id', $complementaryService->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplementaryService  $complementaryService
     * @return \Illuminate\Http\Response
     */
    public function edit($id_servicio_complementario) {
        $complementaryService=ComplementaryService::find($id_servicio_complementario);
        return view('serviciocomplementario/edit',compact('complementaryService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplementaryService  $complementaryService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplementaryService $complementaryService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplementaryService  $complementaryService
     * @return \Illuminate\Http\Response
     */
    public function delete($id_servicio_complementario)
    {
        ComplementaryService::destroy($id_servicio_complementario);
        return redirect()->to('serviciocomplementario');
    }
}

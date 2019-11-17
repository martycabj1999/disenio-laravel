<?php

namespace App\Http\Controllers;

use App\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships= Scholarship::paginate();
        return view('beca/list',compact('scholarships')); //Busca la ruta de la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!(Auth::User()->is_student)){
            return view('beca/create');
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
            'discount'   => ['required'],
            ]);
    
            $datos = request()->all();
    
            Scholarship::create($datos);//crea o actualiza el usuario
            return redirect()->to('beca');
    }

    public function storeEdit($id_beca) {
        $this->validate(request(),[
        'name'   => ['required'],
        'discount'    => ['required'],
        ]);

        $datos = request()->all();

        //replace es una funcion que sirve para buscar un string y reemplazarlo
        unset($datos['_token']);
        Scholarship::where('id', $id_beca)->update($datos);//crea o actualiza el usuario
        //return $password;
        //Mail para la Contraseña//

        return redirect()->to('beca');                      //retorna de nuevo a la pagina usuario
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scholarship  $Scholarship
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        return Scholarship::where('id', $scholarship->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit($id_beca) {
        $scholarship=Scholarship::find($id_beca);
        return view('beca/edit',compact('scholarship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function delete($id_beca)
    {
        Scholarship::destroy($id_beca);
        return redirect()->to('beca');
    }
}

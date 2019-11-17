<?php

namespace App\Http\Controllers;

use App\User;
use App\City;

use Mail;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $users= User::paginate();
            return view('usuario/list',compact('users')); //Busca la ruta de la vista 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!(Auth::User()->is_student)){
        $provinces=Province::all();
        $cities=City::all();
        return view('usuario/create',compact('provinces','cities'));
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
            'email'    => ['required']
            ]);
    
            $datos = request()->all();                            //traes todos los parametros que le pase de la pagina de alta
            $password=$this->randomPassword();
            $datos['password']=bcrypt($password);
    
            User::create($datos);//crea o actualiza el usuario
            //return $password;
            //Mail para la Contraseña//
            Mail::raw($password, function ($message) {
              $message->from('esdeu@gmail.com', 'Password "Esdeu"');
              $message->to('test@gmail.com')->subject('Bienvenido A ELECTRICA');
            });
    
            return redirect()->to('usuario');
    }

    private function randomPassword() {
        $chars = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, 8 );

        return $password;

    }

    public function storeEdit($id_usuario) {
        $this->validate(request(),[
        'name'   => ['required'],
        'email'    => ['required']
        ]);

        $datos = request()->all();

        //replace es una funcion que sirve para buscar un string y reemplazarlo
        unset($datos['_token']);
        User::where('id', $id_usuario)->update($datos);//crea o actualiza el usuario
        //return $password;
        //Mail para la Contraseña//

        return redirect()->to('usuario');                      //retorna de nuevo a la pagina usuario
      }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return User::where('id', $user->id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usuario) {
        $users=User::find($id_usuario);
        $cities=City::all();
        $provinces=Province::all();
        return view('usuario/edit',compact('users','cities','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function delete($id_usuario)
    {
        User::destroy($id_usuario);
        return redirect()->to('usuario');
    }
}

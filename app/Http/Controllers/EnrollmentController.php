<?php

namespace App\Http\Controllers;

use App\Enrollment;
use App\Scholarship;
use App\Division;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!(Auth::User()->is_student)){
        $enrollments= Enrollment::paginate();
        $scholarships= Scholarship::paginate();
        $divisions= Division::paginate();
        $users= User::all();
        return view('matricula/list',compact('enrollments', 'users', 'scholarships', 'divisions'));
        } else {
            return $this->show();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $scholarships= Scholarship::all();
            $divisions= Division::all();
            $users= User::all();
            return view('matricula/create',compact('scholarships','users','divisions'));
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
            'number'   => ['required']
            ]);
            $datos = request()->all();                            //traes todos los parametros que le pase de la pagina de alta
            Enrollment::create($datos);
            return redirect()->to('matricula');
    }

    
    public function storeEdit($id_matricula) {

        $datos = request()->all();
        unset($datos['_token']);
        Enrollment::where('id', $id_matricula)->update($datos);
        return redirect()->to('matricula');                      //retorna de nuevo a la pagina usuario
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $enrollment = Enrollment::where('users_id', (Auth::User()->id))->get();
        $scholarships= Scholarship::all();
        $user = User::where('id', (Auth::User()->id))->get();
        $divisions= Division::all();
        return view('matricula/list',compact('enrollment', 'user', 'divisions', 'scholarships'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit($id_matricula) {
        $enrollment=Enrollment::find($id_matricula);
        $scholarships= Scholarship::all();
        $divisions= Division::all();
        $users= User::all();
        return view('matricula/edit',compact('enrollment','users','scholarships','divisions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function delete($id_matricula)
    {
        Enrollment::destroy($id_matricula);
        return redirect()->to('matricula');
    }
}

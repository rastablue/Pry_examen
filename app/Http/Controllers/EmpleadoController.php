<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App;
use App\User;
use App\Vehiculo;
use App\Tipovehi;
use App\Empleado;


class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.consultas');
    }

    public function busqueda()
    {
            return view('empleados.actualizarConsulta');
    }

    public function busca(Request $request)
    {
        $empleado = Empleado::where('name', 'LIKE', "%ver%");
        return view('empleados.pru', compact('empleado'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->ced = $request->ced;
        $empleado->name = $request->name;
        $empleado->apepater = $request->apepater;
        $empleado->apemater = $request->apemater;
        $empleado->direc = $request->direc;
        $empleado->tlf = $request->tlf;
        $empleado->email = $request->email;
        $empleado->password = Hash::make($request->password);
        $empleado->estado = ($request->estado);

        $empleado->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::findOrfail($id);
        return  view('empleados.actualizar', compact('empleado'));
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
        $empleados = App\Empleado::all();

        $empleado = App\Empleado::findOrFail($id);
        $empleado->direc = $request->direc;
        $empleado->tlf = $request->tlf;
        $empleado->email = $request->email;
        $empleado->password = Hash::make($request->password);

        $empleado->save();

        $empleados = App\Empleado::all();

        return view('empleados.consultas', compact('empleados'));
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

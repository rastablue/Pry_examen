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
use App\Mante;
use App\Tipomante;
use Carbon\Carbon;


class MantenimientoController extends Controller
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
        $mantenimientos = App\Mante::paginate(3);
        return view('mantenimientos.consultas', compact('mantenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipomantes = Tipomante::all();
        return view('mantenimientos.crear', compact('tipomantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();

        $placa = $request->placa;
        $vehi_id = Vehiculo::where('placa', $placa)->first();

        $mantenimiento = new Mante();
        $mantenimiento->nro_ficha = $request->numficha;
        $mantenimiento->dia_ingre = $date;
        $mantenimiento->observa = $request->observa;
        $mantenimiento->costo = $request->costo;
        $mantenimiento->vehi_id = $vehi_id->id;
        $mantenimiento->estmante_id = 1;
        $mantenimiento->tipomantes_id = $request->tipomantes_id;

        $mantenimiento->save();

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
        $mantenimientos = App\Mante::findOrFail($id);
        return view('mantenimientos.detalleConsulta', compact('mantenimientos'));
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

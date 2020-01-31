<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;
use App\Vehiculo;
use App\Tipovehi;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'placa' => ['required', 'string', 'max:255'],
            'marca' => ['required', 'string', 'max:255'],
            'modelo' => ['required', 'string', 'max:255'],
            'color' => ['required', 'string', 'max:255'],
            'observa' => ['required', 'text'],
            'user_id' => ['required', 'bigint', 'max:20'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

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
        $tipovehi = Tipovehi::all();
        return view('vehiculos.crear', compact('tipovehi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ced = $request->user_id;
        $id_users = User::where('ced', $ced)->first();

        $vehiculo = new Vehiculo();
        $vehiculo->placa = $request->placa;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->color = $request->color;
        $vehiculo->observa = $request->observa;
        $vehiculo->user_id = $id_users->id;
        $vehiculo->tipovehis_id = $request->tipovehis_id;
        $vehiculo->save();

        return back()->with('mensaje', 'Nota Agregada!');
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

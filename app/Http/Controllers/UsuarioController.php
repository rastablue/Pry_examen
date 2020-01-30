<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersId = auth()->user()->id;
        $users = User::where('id', $usersId)->paginate(5);
        return view('users.consultas',compact('users'));
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
        //
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
        $users = App\User::findOrFail($id);

        return view('users.actualizar',compact('users'));
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
        $request -> validate([
            'ced' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'apepater' => ['required', 'string', 'max:255'],
            'apemater' => ['required', 'string', 'max:255'],
            'direc' => ['required', 'string', 'max:255'],
            'tlf' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $users = new User();
        $users->ced = $request->ced;
        $users->name = $request->name;
        $users->apepater = $request->apepater;
        $users->apemater = $request->apemater;
        $users->direc = $request->direc;
        $users->tlf = $request->tlf;
        $users->email = $request->email;
        $users->id = auth()->user()->id;

        $users->save();

        return back()->with('mensaje', 'Nota Agregada!');
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

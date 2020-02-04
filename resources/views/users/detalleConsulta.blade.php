@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4>Detalles del Usuario: {{ $user->name }}    {{ $user->apepater }}</h4></span>
                    <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col" colspan="1">Apellidos</th>
                                <th></th>
                                <th scope="col" width="210px">Direccion</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">E-mail</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ $user->ced }}</th>
                                <td>{{ $user->name }}</td>
                                <td colspan="2">{{ $user->apepater }}    {{ $user->apemater }}</td>
                                <td>{{ $user->direc }}</td>
                                <td>{{ $user->tlf }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{ DB::enableQueryLog() }}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-users-center">
                    <span><h4>Detalles del Vehiculo</h4></span>
                </div>

                <div class="card-body">

                    <table class="table table">
                        <thead>
                          <tr class="table-secondary">
                            <th scope="col">Placa</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Color</th>
                            <th scope="col">Tipo de Vehiculo</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($usuarios = App\User::findOrFail($user->id)->vehiculos as $item)
                                <td> {{ $item->placa }} </td>
                                <td> {{ $item->marca }} </td>
                                <td> {{ $item->modelo }} </td>
                                <td> {{ $item->color }} </td>
                                <td>
                                    @foreach ($tipo = App\User::findOrFail($user->id)->tipovehiculos->where('id', $item->tipovehis_id) as $itemVehi)
                                    {{ $itemVehi->tipo }}
                                    @endforeach
                                </td>
                                </tr>
                                    <thead>
                                        <tr class="table-info">
                                            <th scope="col" colspan="5">Observaciones:</th>
                                        </tr>
                                    </thead>
                                <tr>
                                <td colspan="5"> {{ $item->observa }} </td>
                                @endforeach
                            </tr>
                            {{ dd(DB::getQueryLog()) }}

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

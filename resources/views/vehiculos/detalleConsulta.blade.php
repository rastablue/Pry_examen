@extends('layouts.app')

@section('content')

<!-- Tabla Vehiculo -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Detalles del Vehiculo:</b><i> {{ $vehiculos->nro_ficha }}</i></h4></span>
                    <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col"><div class="text-center">Placa</div></th>
                                <th scope="col"><div class="text-center">Marca</div></th>
                                <th scope="col"><div class="text-center">Modelo</div></th>
                                <th scope="col"><div class="text-center">Color</div></th>
                                <th scope="col"><div class="text-center">Tipo</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><div class="text-center">{{ $vehiculos->placa }}</div></th>
                                <td><div class="text-center">{{ $vehiculos->marca }}</div></td>
                                <td><div class="text-center">{{ $vehiculos->modelo }}</div></td>
                                <td><div class="text-center">{{ $vehiculos->color }}</div></td>
                                <td>
                                    <div class="text-center">
                                        {{
                                            $tipo = App\Vehiculo::findOrFail($vehiculos->id)
                                                                ->tipovehis->where('id', $vehiculos->tipovehis_id)
                                                                ->value('tipo')
                                        }}
                                    </div>
                                </td>
                            </tr>
                            <thead>
                                <tr class="table-info">
                                    <th scope="col" colspan="5">Observaciones:</th>
                                </tr>
                            </thead>
                            <tr>
                                <td colspan="5">{{ $vehiculos->observa }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Tabla Usuario -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Detalles del Cliente:</b></h4></span>
                </div>

                <div class="card-body">

                    <table class="table table">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col"><div class="text-center">Cedula</div></th>
                                <th scope="col"><div class="text-center">Nombre</div></th>
                                <th scope="col"><div class="text-center">Apellidos</div></th>
                                <th scope="col"><div class="text-center" width="210px">Direccion</div></th>
                                <th scope="col"><div class="text-center">Telefono</div></th>
                                <th scope="col"><div class="text-center">Email</div></th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($user = App\Vehiculo::findOrFail($vehiculos->id)->users->where('id', $vehiculos->user_id)->get() as $item)
                                    <th><div class="text-center"> {{ $item->ced }} </div></th>
                                    <td><div class="text-center"> {{ $item->name }} </div></td>
                                    <td><div class="text-center"> {{ $item->apepater }} {{ $item->apemater }} </div></td>
                                    <td><div class="text-center"> {{ $item->direc }} </div></td>
                                    <td><div class="text-center"> {{ $item->tlf }} </div></td>
                                    <td><div class="text-center"> {{ $item->email }} </div></td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

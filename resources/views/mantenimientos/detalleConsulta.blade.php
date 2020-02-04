@extends('layouts.app')

@section('content')

<!-- Tabla Detallles del mantenimiento -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Detalles del Mantenimiento:</b><i> {{ $mantenimientos->nro_ficha }}</i></h4></span>
                    <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col"><div class="text-center">Nro. Ficha Tecnica</div></th>
                                <th scope="col"><div class="text-center">Ingreso</div></th>
                                <th scope="col"><div class="text-center">Salida</div></th>
                                <th scope="col"><div class="text-center">Valor del servicio</div></th>
                                <th scope="col"><div class="text-center">Tipo De Mantenimiento</div></th>
                                <th scope="col"><div class="text-center">Estado</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><div class="text-center">{{ $mantenimientos->nro_ficha}}</div></th>
                                <td><div class="text-center">{{ $mantenimientos->dia_ingre }}</div></td>
                                <td><div class="text-center">{{ $mantenimientos->dia_egre }}</div></td>
                                <td><div class="text-center">{{ $mantenimientos->costo }}</div></td>
                                <td>
                                    @if ($tipoMante = App\Mante::findOrFail($mantenimientos->id)->tipomantes->where('id', $mantenimientos->tipomantes_id)->value('id') === 1)

                                        <div class="text-center">
                                            <a>
                                                <img class="img-responsive img-rounded" src="{{ asset('images/salud.png') }}"><br/>

                                                {{
                                                    $tipoMante = App\Mante::findOrFail($mantenimientos->id)->tipomantes->
                                                                where('id', $mantenimientos->tipomantes_id)->value('tipomante')
                                                }}

                                            </a>
                                        </div>

                                    @else
                                        <div class="text-center">
                                            <a>
                                                <img class="img-responsive img-rounded" src="{{ asset('images/coche.png') }}"><br/>

                                                {{
                                                    $tipoMante = App\Mante::findOrFail($mantenimientos->id)->tipomantes->
                                                                where('id', $mantenimientos->tipomantes_id)->value('tipomante')
                                                }}

                                            </a>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if ($estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->where('id', $mantenimientos->estmante_id)->value('id') === 1)

                                        <div class="text-center">
                                            <a>
                                                <img class="img-responsive img-rounded" src="{{ asset('images/apoyo.png') }}"><br/>

                                                {{
                                                    $estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->
                                                    where('id', $mantenimientos->estmante_id)->value('estadomante')
                                                }}

                                            </a>
                                        </div>

                                    @else
                                        @if ($estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->where('id', $mantenimientos->estmante_id)->value('id') === 2)

                                            <div class="text-center">
                                                <a>
                                                    <img class="img-responsive img-rounded" src="{{ asset('images/reporte.png') }}"><br/>

                                                    {{
                                                        $estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->
                                                        where('id', $mantenimientos->estmante_id)->value('estadomante')
                                                    }}

                                                </a>
                                            </div>

                                        @else
                                            @if ($estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->where('id', $mantenimientos->estmante_id)->value('id') === 3)

                                                <div class="text-center">
                                                    <a>
                                                        <img class="img-responsive img-rounded" aria-hidden="true" src="{{ asset('images/reloj.png') }}"><br/>

                                                        {{
                                                            $estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->
                                                            where('id', $mantenimientos->estmante_id)->value('estadomante')
                                                        }}

                                                    </a>
                                                </div>

                                            @else

                                                <div class="text-center">
                                                    <a>
                                                        <img class="img-responsive img-rounded" src="{{ asset('images/correcto.png') }}"><br/>

                                                        {{
                                                            $estado = App\Mante::findOrFail($mantenimientos->estmante_id)->estadomantes->
                                                            where('id', $mantenimientos->estmante_id)->value('estadomante')
                                                        }}

                                                    </a>
                                                </div>

                                            @endif
                                        @endif
                                    @endif

                                </td>
                            </tr>
                            <thead>
                                <tr class="table-info">
                                    <th scope="col" colspan="6">Observaciones:</th>
                                </tr>
                            </thead>
                            <tr>
                                <td colspan="6">{{ $mantenimientos->observa }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Tabla Detallles del Vehiculo -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Detalles del Vehiculo</b></h4></span>
                </div>

                <div class="card-body">

                    <table class="table table">
                        <thead>
                          <tr class="table-secondary">
                            <th scope="col"><div class="text-center">Placa</div></th>
                            <th scope="col"><div class="text-center">Marca</div></th>
                            <th scope="col"><div class="text-center">Modelo</div></th>
                            <th scope="col"><div class="text-center">Color</div></th>
                            <th scope="col"><div class="text-center">Tipo de Vehiculo</div></th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($mante = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->get() as $item)
                                    <th><div class="text-center"> {{ $item->placa }} </div></th>
                                    <td><div class="text-center"> {{ $item->marca }} </div></td>
                                    <td><div class="text-center"> {{ $item->modelo }} </div></td>
                                    <td><div class="text-center"> {{ $item->color }} </div></td>
                                    <td><div class="text-center">
                                        {{
                                        $data = App\Tipovehi::select('tipovehis.tipo')
                                                ->join('vehiculos', 'vehiculos.tipovehis_id', '=', 'tipovehis.id')
                                                ->where('vehiculos.tipovehis_id', $item->tipovehis_id)
                                                ->first()->tipo
                                        }}
                                    </div></td>
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
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabla Detallles del Cliente -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Detalles del Cliente</b></h4></span>
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
                                @foreach ($mante = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->get() as $item)
                                    <!-- Consultar Cedula -->
                                    <th>
                                        <div class="text-center">
                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->ced
                                            }}
                                        </div>
                                    </th>
                                    <!-- Consultar Nombre -->
                                    <td>
                                        <div class="text-center">
                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->name
                                            }}
                                        </div>
                                    </td>
                                    <!-- Consultar Apellidos -->
                                    <td>
                                        <div class="text-center">
                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->apepater
                                            }}

                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->apemater
                                            }}
                                        </div>
                                    </td>
                                    <!-- Consultar Direccion -->
                                    <td>
                                        <div class="text-center">
                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->direc
                                            }}
                                        </div>
                                    </td>
                                    <!-- Consultar Telefono -->
                                    <td>
                                        <div class="text-center">
                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->tlf
                                            }}
                                        </div>
                                    </td>
                                    <!-- Consultar Email -->
                                    <td>
                                        <div class="text-center">
                                            {{
                                                $data = App\User::select('users.*')
                                                        ->join('vehiculos', 'vehiculos.user_id', '=', 'users.id')
                                                        ->where('vehiculos.user_id', $item->user_id)
                                                        ->first()->email
                                            }}
                                        </div>
                                    </td>
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

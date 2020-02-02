@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4>Detalles del Mantenimiento: {{ $mantenimientos->nro_ficha }}</h4></span>
                    <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col">Nro. Ficha Tecnica</th>
                                <th scope="col">Ingreso</th>
                                <th scope="col">Salida</th>
                                <th scope="col">Valor del servicio</th>
                                <th scope="col">Tipo De Mantenimiento</th>
                                <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $mantenimientos->nro_ficha}}</td>
                                <td>{{ $mantenimientos->dia_ingre }}</td>
                                <td>{{ $mantenimientos->dia_egre }}</td>
                                <td>{{ $mantenimientos->costo }}</td>
                                <td>
                                    <a href="" class="btn btn-secondary btn-sm"  onclick="return false">
                                        {{
                                        $tipoMante = App\Mante::findOrFail($mantenimientos->id)->tipomantes->
                                        where('id', $mantenimientos->tipomantes_id)->value('tipomante')
                                        }}
                                    </a>
                                </td>
                                <td>
                                    @if ($estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->where('id', $mantenimientos->estmante_id)->value('id') === 1)

                                        <a href="" class="btn btn-primary btn-sm"  onclick="return false">
                                            {{
                                                $estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->
                                                where('id', $mantenimientos->estmante_id)->value('estadomante')
                                            }}
                                        </a>

                                    @else
                                        @if ($estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->where('id', $mantenimientos->estmante_id)->value('id') === 2)

                                            <a href="" class="btn btn-warning btn-sm"  onclick="return false">
                                                {{
                                                    $estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->
                                                    where('id', $mantenimientos->estmante_id)->value('estadomante')
                                                }}
                                            </a>
                                        @else
                                            <a href="" class="btn btn-success btn-sm"  onclick="return false">
                                                {{
                                                    $estado = App\Mante::findOrFail($mantenimientos->id)->estadomantes->
                                                    where('id', $mantenimientos->estmante_id)->value('estadomante')
                                                }}
                                            </a>
                                        @endif
                                    @endif

                                </td>
                            </tr>
                        <thead>
                            <tr class="table-secondary">
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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
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
                            <td>
                                {{
                                $placa = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->value('placa')
                                }}
                            </td>
                            <td>
                                {{
                                $marca = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->value('marca')
                                }}
                            </td>
                            <td>
                                {{
                                $modelo = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->value('modelo')
                                }}
                            </td>
                            <td>
                                {{
                                $color = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->value('color')
                                }}
                            </td>
                            <td>
                                {{
                                $ss = App\Mante::findOrFail($mantenimientos->id)->tipovehiculos->
                                where('id', $mantenimientos->vehi_id)->first()
                                }}
                            </td>
                          </tr>
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col" colspan="5">Observaciones:</th>
                            </tr>
                        </thead>
                          <tr>
                            <td colspan="5">
                                {{
                                $observa = App\Mante::findOrFail($mantenimientos->id)->vehiculos->where('id', $mantenimientos->vehi_id)->value('observa')
                                }}
                            </td>
                          </tr>

                        </tbody>
                    </table>
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

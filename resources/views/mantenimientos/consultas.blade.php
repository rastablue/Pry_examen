@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Tramites</span>
                </div>

                <div class="card-body">
                    @foreach ($mantenimientos as $item)
                        <table class="table mb-5">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">{{ $loop->iteration}}</th>
                                    <th scope="col">Nro. Ficha Tecnica</th>
                                    <th scope="col">Ingreso</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Valor del servicio</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td>{{ $item->nro_ficha}}</td>
                                    <td>{{ $item->dia_ingre }}</td>
                                    <td>{{
                                        $placa = App\Mante::findOrFail($item->id)->vehiculos->where('id', $item->vehi_id)->value('placa')}}
                                    </td>
                                    <td>{{ $item->costo }}</td>
                                    <td>
                                        <a href="{{ route('mantenimientos.show', $item) }}">
                                            <img class="img-responsive img-rounded float-left" src="{{ asset('images/alerta.png') }}">
                                        </a>
                                        <a href="{{ route('mantenimientos.edit', $item) }}">
                                            <img class="img-responsive img-rounded float-right" src="{{ asset('images/recargar.png') }}">
                                        </a>
                                    </td>
                                    <thead>
                                        <th scope="col" colspan="6" class="table-info">Observaciones:</th>
                                    </thead>
                                    <tr>
                                        <td colspan="6">{{ $item->observa }}</td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    @endforeach
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

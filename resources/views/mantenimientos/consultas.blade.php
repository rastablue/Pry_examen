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
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nro. Ficha Tecnica</th>
                            <th scope="col">Ingreso</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Observacion</th>
                            <th scope="col">Valor del servicio</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mantenimientos as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nro_ficha}}</td>
                                <td>{{ $item->dia_ingre }}</td>
                                <td>{{
                                    $placa = App\Mante::findOrFail($item->id)->vehiculos->where('id', $item->vehi_id)->value('placa')}}
                                </td>
                                <td>{{ $item->observa }}</td>
                                <td>{{ $item->costo }}</td>
                                {{-- <td>
                                @if ($item->estado==='a')
                                    <button class="btn btn-success btn-sm" type="submit" disabled="true">En proceso</button>

                                @else
                                    <button class="btn btn-danger btn-sm" type="submit" disabled="true">Finalizado</button>
                                @endif
                            </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

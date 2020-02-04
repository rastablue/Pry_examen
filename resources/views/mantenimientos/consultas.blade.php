@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Lista de Tramites</b></h4></span>
                </div>

                <div class="card-body">
                    @foreach ($mantenimientos as $item)
                    <div class="card-body">
                        <table class="table mb-5">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col"><div class="text-center">{{ $loop->iteration}}</div></th>
                                    <th scope="col"><div class="text-center">Nro. Ficha Tecnica</div></th>
                                    <th scope="col"><div class="text-center">Ingreso</div></th>
                                    <th scope="col"><div class="text-center">Placa</div></th>
                                    <th scope="col"><div class="text-center">Valor del servicio</div></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <th scope="row"><div class="text-center">{{ $item->nro_ficha}}</div></th>
                                    <td><div class="text-center">{{ $item->dia_ingre }}</div></td>
                                    <td><div class="text-center">{{
                                        $placa = App\Mante::findOrFail($item->id)->vehiculos->where('id', $item->vehi_id)->value('placa')}}
                                    </div></td>
                                    <td><div class="text-center">{{ $item->costo }}</div></td>
                                    <td><div class="text-center">
                                        <a href="{{ route('mantenimientos.show', $item) }}">
                                            <img class="img-responsive img-rounded float-left" src="{{ asset('images/alerta.png') }}">
                                        </a>
                                        <a href="{{ route('mantenimientos.edit', $item) }}">
                                            <img class="img-responsive img-rounded float-right" src="{{ asset('images/recargar.png') }}">
                                        </a>
                                    </div></td>
                                    <thead>
                                        <th scope="col" colspan="6" class="table-info">Observaciones:</th>
                                    </thead>
                                    <tr>
                                        <td colspan="6">{{ $item->observa }}</td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                        {{ $mantenimientos->links() }}
                    </div>
                    @endforeach
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

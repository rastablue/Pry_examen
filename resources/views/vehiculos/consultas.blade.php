@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Lista de Vehiculos:</b></h4></span>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="table-secondary">
                            <th scope="col"></th>
                            <th scope="col"><div class="text-center">Placa</div></th>
                            <th scope="col"><div class="text-center">Marca</div></th>
                            <th scope="col"><div class="text-center">Modelo</div></th>
                            <th scope="col"><div class="text-center">Color</div></th>
                            <th scope="col"><div class="text-center">Observacion</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $item)
                            <tr>
                                <th scope="row"><i>{{ $loop->iteration }}</i></th>
                                <th><div class="text-center">{{ $item->placa }}</div></th>
                                <td><div class="text-center">{{ $item->marca }}</div></td>
                                <td><div class="text-center">{{ $item->modelo }}</div></td>
                                <td><div class="text-center">{{ $item->color }}</div></td>
                                <td><div class="text-center">{{ $item->observa }}</div></td>
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

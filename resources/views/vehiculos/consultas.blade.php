@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Vehiculos {{auth()->user()->name}}</span>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Color</th>
                            <th scope="col">Observacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->placa }}</td>
                                <td>{{ $item->marca }}</td>
                                <td>{{ $item->modelo }}</td>
                                <td>{{ $item->color }}</td>
                                <td>{{ $item->observa }}</td>
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

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
                            @foreach ($user as $item)
                            <tr>
                                <th scope="row">{{ $item->ced }}</th>
                                <td>{{ $item->name }}</td>
                                <td colspan="2">{{ $item->apepater }}    {{ $item->apemater }}</td>
                                <td>{{ $item->direc }}</td>
                                <td>{{ $item->tlf }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('users.show', $item) }}">
                                        <img class="img-responsive img-rounded float-left" src="{{ asset('images/informacion.png') }}">
                                    </a>
                                    <a href="{{ route('users.edit', $item) }}">
                                        <img class="img-responsive img-rounded float-right" src="{{ asset('images/recargar.png') }}">
                                    </a>
                                </td>
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

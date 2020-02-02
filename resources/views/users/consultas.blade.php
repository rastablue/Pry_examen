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
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col" colspan="1">Apellidos</th>
                                <th></th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">E-mail</th>
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

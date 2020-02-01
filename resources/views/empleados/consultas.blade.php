@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Lista de Empleados</span>
                </div>

                <div class="card-body">
                    <table class="table">
                        @foreach ($empleados as $item)
                        <thead>
                            <tr>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Email</th>
                            @if ($item->estado==='a')
                                <th scope="col">Estado</th>
                            @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->ced}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->apepater }}</td>
                                <td>{{ $item->direc }}</td>
                                <td>{{ $item->tlf }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                @if ($item->estado==='a')
                                    <button class="btn btn-success btn-sm" type="submit" disabled="true">Activo</button>
                                @endif
                            </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

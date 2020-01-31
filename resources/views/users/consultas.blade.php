@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Los Tramites de {{auth()->user()->name}}</span>
                <a href="/users/1" class="btn btn-primary btn-sm">Nueva Nota</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->apepater }}</td>
                                <td>
                                @if ($item->name==='Matin')
                                    <button class="btn btn-success btn-sm" type="submit" disabled="true">Finalizado</button>

                                @else
                                    <button class="btn btn-danger btn-sm" type="submit" disabled="true">En proceso</button>
                                @endif
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

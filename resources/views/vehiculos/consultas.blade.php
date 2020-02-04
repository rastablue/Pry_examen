@extends('layouts.app')
{{ $vehiculos = App\Vehiculo::paginate(3) }}
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Lista de Vehiculos:</b></h4></span>
                </div>

                <div class="card-body">
                    @foreach ($vehiculos as $item)
                        <table class="table mb-5">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col"><i>{{ $loop->iteration }}</i></th>
                                    <th scope="col"><div class="text-center">Placa</div></th>
                                    <th scope="col"><div class="text-center">Marca</div></th>
                                    <th scope="col"><div class="text-center">Modelo</div></th>
                                    <th scope="col"><div class="text-center">Color</div></th>
                                    <th width="105px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th><div class="text-center">{{ $item->placa }}</div></th>
                                    <td><div class="text-center">{{ $item->marca }}</div></td>
                                    <td><div class="text-center">{{ $item->modelo }}</div></td>
                                    <td><div class="text-center">{{ $item->color }}</div></td>
                                    <td width="105px">
                                        <a href="{{ route('vehiculos.show', $item) }}">
                                            <img class="img-responsive img-rounded float-left" src="{{ asset('images/informacion.png') }}">
                                        </a>
                                        <a href="{{ route('vehiculos.edit', $item) }}">
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
                    {{ $vehiculos->links() }}
                    {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

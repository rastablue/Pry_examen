@extends('layouts.app')
{{ $empleados = App\Empleado::paginate(3) }}
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span><h4><b>Lista de Empleados</b></h4></span>
                </div>

                <div class="card-body">
                    <table class="table">
                        @foreach ($empleados as $item)
                        <thead>
                            <tr class="table-secondary">
                                <th> <i>{{ $loop->iteration }}</i> </th>
                                <th scope="col"><div class="text-center">Cedula</div></th>
                                <th scope="col"><div class="text-center">Nombre</div></th>
                                <th scope="col"><div class="text-center">Apellidos</div></th>
                                <th scope="col" width="210px"><div class="text-center">Direccion</div></th>
                                <th scope="col"><div class="text-center">Telefono</div></th>
                                <th scope="col"><div class="text-center">Email</div></th>
                                <th scope="col"><div class="text-center">Estado</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><div class="text-center">{{ $item->ced}}</div></td>
                                <td><div class="text-center">{{ $item->name }}</div></td>
                                <td><div class="text-center">{{ $item->apepater }}  {{ $item->apemater }} </div></td>
                                <td width="210px"><div class="text-center">{{ $item->direc }}</div></td>
                                <td><div class="text-center">{{ $item->tlf }}</div></td>
                                <td><div class="text-center">{{ $item->email }}</div></td>
                                <td><div class="text-center">
                                    @if ($item->estado==='a')

                                        <div class="text-center">
                                            <a>
                                                <img class="img-responsive img-rounded" src="{{ asset('images/correcto.png') }}"><br>
                                                activo
                                            </a>
                                        </div>

                                    @else

                                        <div class="text-center">
                                            <a>
                                                <img class="img-responsive img-rounded" src="{{ asset('images/herido.png') }}"><br/>
                                                inactivo
                                            </a>
                                        </div>

                                    @endif
                                </div></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{ $empleados->links() }}
                {{-- fin card body --}}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span><h4><b>Asignar Puestos</b></h4></span>
                        <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/mantenimientos">
                            @csrf

                            {{-- Seleccionar Actividad --}}
                            <div class="form-group row">
                                <label for="tipomantes_id" class="col-md-4 col-form-label text-md-right">{{ __('Actividad') }}</label>

                                <div class="col-md-6">

                                    <select id="tipomantes_id" class="form-control" name="tipomantes_id">
                                        <option disabled="true">Seleccione Actividad</option>
                                        @foreach($mantenimientos as $item)
                                            <option value="{{ $item->id }}">  {{ $item->nro_ficha}}  </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            {{-- Seleccionar Empleado --}}
                            <div class="form-group row">
                                <label for="tipomantes_id" class="col-md-4 col-form-label text-md-right">{{ __('Empleado') }}</label>

                                <div class="col-md-6">

                                    <select id="tipomantes_id" class="form-control" name="tipomantes_id">
                                        <option disabled="true">Seleccione Empleado</option>
                                        @foreach($empleados as $item)
                                            <option value="{{ $item->id }}">  {{ $item->name}}  </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            {{-- Estado Proceso

                            <input id="estado" type="hidden" name="estado" value="a">--}}

                            {{-- btn --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Nuevo Ingreso de Vehiculo</span>
                        <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/vehiculos">
                            @csrf
                            {{-- Placa --}}
                            <div class="form-group row">
                                <label for="placa" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Placa') }}</label>

                                <div class="col-md-6">
                                    <input id="placa" type="text" class="form-control @error('placa') is-invalid @enderror" name="placa" value="{{ old('placa') }}" required autocomplete="placa" autofocus>

                                    @error('placa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Marca --}}
                            <div class="form-group row">
                                <label for="marca" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                                <div class="col-md-6">
                                    <input id="marca" type="text" pattern="[A-Za-z]{1,25}" class="form-control @error('marca') is-invalid @enderror" name="marca" value="{{ old('marca') }}" required autocomplete="marca" autofocus>

                                    @error('marca')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Modelo --}}
                            <div class="form-group row">
                                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                                <div class="col-md-6">
                                    <input id="modelo" type="text" class="form-control @error('modelo') is-invalid @enderror" name="modelo" value="{{ old('modelo') }}" required autocomplete="modelo" autofocus>

                                    @error('modelo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Color --}}
                            <div class="form-group row">

                                <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

                                <div class="col-md-6">
                                    <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color') }}" required autocomplete="color" autofocus>

                                    @error('color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Observaciones --}}
                            <div class="form-group row">
                                <label for="observa" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones') }}</label>

                                <div class="col-md-6">
                                    <input id="observa" type="text" class="form-control @error('observa') is-invalid @enderror" name="observa" value="{{ old('observa') }}" required autocomplete="observaciones" autofocus>

                                    @error('observa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Cedula del cliente --}}
                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Cedula del Cliente') }}</label>

                                <div class="col-md-6">
                                    <input id="user_id" type="text"  class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>

                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Tipo Vehiculos --}}
                            <div class="form-group row">
                                <label for="tipovehis_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Vehiculo') }}</label>

                                <div class="col-md-6">

                                    <select id="tipovehis_id" class="form-control" name="tipovehis_id">
                                        <option disabled="true">Seleccione Tipo</option>
                                        @foreach($tipovehi as $tipos)
                                            <option value="{{ $tipos->id }}">  {{ $tipos->tipo}}  </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            {{-- Estado Proceso --}}

                            <input id="estado" type="hidden" name="estado" value="a">

                            {{-- btn --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
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

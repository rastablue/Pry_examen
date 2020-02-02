@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Nuevo Mantenimiento</span>
                        <a href="javascript:history.back()" class="btn btn-primary btn-sm">Volver</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/mantenimientos">
                            @csrf

                            {{-- Numero de Ficha Tecnica --}}
                            <div class="form-group row">
                                <label for="numficha" class="col-md-4 col-form-label text-md-right">{{ __('Nro. Ficha Tecnica') }}</label>

                                <div class="col-md-6">
                                    <input id="numficha" type="number" pattern="{7}" class="form-control @error('numficha') is-invalid @enderror" name="numficha" value="{{ old('numficha') }}" required autocomplete="numficha" autofocus>

                                    @error('numficha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Placa Vehiculo --}}
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

                            {{-- Tipo Mantenimiento --}}
                            <div class="form-group row">
                                <label for="tipomantes_id" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Mantenimiento') }}</label>

                                <div class="col-md-6">

                                    <select id="tipomantes_id" class="form-control" name="tipomantes_id">
                                        <option disabled="true">Seleccione Tipo</option>
                                        @foreach($tipomantes as $tipos)
                                            <option value="{{ $tipos->id }}">  {{ $tipos->tipomante}}  </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            {{-- Costo --}}
                            <div class="form-group row">
                                <label for="costo" class="col-md-4 col-form-label text-md-right">{{ __('Costo del Servicio') }}</label>

                                <div class="col-md-6">
                                    <input id="costo" type="number"  step="0.001" class="form-control @error('costo') is-invalid @enderror" name="costo" value="{{ old('costo') }}" required autocomplete="costo" autofocus>

                                    @error('costo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Estado Proceso

                            <input id="estado" type="hidden" name="estado" value="a">--}}

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

@extends('layouts.app')
@section('content')
{{ $empleado->first() }}

    <div class="col-md-12">
        <div class="mb-3">
            <div class="input-group">
            <input name="buscar" type="text" class="form-control search-menu mt-0" placeholder="Search..." value=" {{old('buscar')}} ">
                <div class="input-group-append">
                    <span class="input-group">
                        <a href="{{ route('busca') }}"
                            onclick="event.preventDefault();
                                document.getElementById('buscar-form').submit();">
                            <img class="img-responsive img-rounded" src="{{ asset('images/buscar.png') }}">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <form id="buscar-form" action="{{ route('busca') }}" method="POST" style="display: none;">
    @csrf
    </form>

@endsection

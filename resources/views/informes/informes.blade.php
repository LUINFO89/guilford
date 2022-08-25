@extends('layouts.template')

@section('template_title')
Solicitude
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="display: center;  align-items: center;">


                <div class="card-header" style="display: center;  align-items: center;">

                    <div style="display: center;  align-items: center;">

                        <span id="card_title " style="display:flex;  align-items: center; ;font-size: 30px; ">
                            <i class="nc-icon nc-paper"></i>
                            {{ __('IMPRIMIR ESTADISTICOS') }}
                        </span>
                        <!-- Example single danger button -->
                        <div class="dropdown " >
                            <button class="btn btn-secundary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 80%">
                                Seleccione.... </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="font-size: 18px">
                                <a href="{{ route('download-pdf') }}" class="dropdown-item" data-placement="center" style="font-size: 18px">
                                    {{ __('1. Informe de Estudiantes Activos') }}
                                </a>
                                <a href="{{ route('download-pdf-grados') }}" class="dropdown-item" style="font-size: 18px"
                                    data-placement="left">
                                    {{ __('2. Informe Total de Grados') }}
                                </a>
                                <a href="{{ route('download-pdf-solicitudes') }}" class="dropdown-item" style="font-size: 18px"
                                    data-placement="left">
                                    {{ __('3. Informe Total de Solicitudes ') }}
                                </a>
                                <a href="{{ route('download-pdf-certificaciones') }}" class="dropdown-item" style="font-size: 18px"
                                data-placement="left">
                                    {{ __('4. Informe Total de certificaciones ') }}
                                </a>
                                <a href="{{ route('download-pdf-users') }}" class="dropdown-item" style="font-size: 18px"
                                data-placement="left">
                                    {{ __('5    . Informe Total de Usuarios ') }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

               
            </div>
        </div>
    </div>
</div>
@endsection
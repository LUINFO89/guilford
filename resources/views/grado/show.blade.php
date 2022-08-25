@extends('layouts.template')

@section('template_title')
    {{ $grado->name ?? 'Show Grado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Grado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-secundary" href="{{ route('grados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombregrado:</strong>
                            {{ $grado->nombreGrado }}
                        </div>
                        <div class="form-group">
                            <strong>Preciogrado:</strong>
                            {{ $grado->precioGrado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

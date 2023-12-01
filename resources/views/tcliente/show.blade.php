@extends('layouts.app')

@section('template_title')
    {{ $tcliente->name ?? "{{ __('Show') Tcliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tcliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tclientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tcliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tcliente->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empresa Id:</strong>
                            {{ $cliente->empresa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id:</strong>
                            {{ $cliente->tipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad Id:</strong>
                            {{ $cliente->ciudad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Depa Id:</strong>
                            {{ $cliente->depa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cupo Credito:</strong>
                            {{ $cliente->cupo_credito }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo:</strong>
                            {{ $cliente->saldo }}
                        </div>
                        <div class="form-group">
                            <strong>Pagos:</strong>
                            {{ $cliente->pagos }}
                        </div>
                        <div class="form-group">
                            <strong>Compras:</strong>
                            {{ $cliente->compras }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

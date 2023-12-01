@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? "{{ __('Show') Factura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $factura->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Tfactura Id:</strong>
                            {{ $factura->tfactura_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $factura->cliente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $factura->total }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $factura->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $factura->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $factura->subtotal }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo:</strong>
                            {{ $factura->saldo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $factura->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

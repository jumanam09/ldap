@extends('layouts.app')

@section('template_title')
    {{ $tfactura->name ?? "{{ __('Show') Tfactura" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tfactura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tfacturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tfactura->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tfactura->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $pai->name ?? "{{ __('Show') Pai" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pai</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pais.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $pai->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $pai->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empresa_id') }}
            {{ Form::text('empresa_id', $cliente->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa Id']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_id') }}
            {{ Form::text('tipo_id', $cliente->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad_id') }}
            {{ Form::text('ciudad_id', $cliente->ciudad_id, ['class' => 'form-control' . ($errors->has('ciudad_id') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad Id']) }}
            {!! $errors->first('ciudad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('depa_id') }}
            {{ Form::text('depa_id', $cliente->depa_id, ['class' => 'form-control' . ($errors->has('depa_id') ? ' is-invalid' : ''), 'placeholder' => 'Depa Id']) }}
            {!! $errors->first('depa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cupo_credito') }}
            {{ Form::text('cupo_credito', $cliente->cupo_credito, ['class' => 'form-control' . ($errors->has('cupo_credito') ? ' is-invalid' : ''), 'placeholder' => 'Cupo Credito']) }}
            {!! $errors->first('cupo_credito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('saldo') }}
            {{ Form::text('saldo', $cliente->saldo, ['class' => 'form-control' . ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => 'Saldo']) }}
            {!! $errors->first('saldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pagos') }}
            {{ Form::text('pagos', $cliente->pagos, ['class' => 'form-control' . ($errors->has('pagos') ? ' is-invalid' : ''), 'placeholder' => 'Pagos']) }}
            {!! $errors->first('pagos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('compras') }}
            {{ Form::text('compras', $cliente->compras, ['class' => 'form-control' . ($errors->has('compras') ? ' is-invalid' : ''), 'placeholder' => 'Compras']) }}
            {!! $errors->first('compras', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
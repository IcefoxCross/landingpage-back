{!! Form::open(array('route'=>'subs.store','method'=>'POST')) !!}
<div class="row text-center">
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre') !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'Apellido') !!}
        {!! Form::text('apellido') !!}
    </div>
    
    {!! Form::email('email') !!}
    <button type="submit" class="btn btn-primary">Subscribirse</button>
</div>
{!! Form::close() !!}
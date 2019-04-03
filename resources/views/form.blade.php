{!! Form::open(array('route'=>'subs.store','method'=>'POST')) !!}
<div class="text-center">
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre') !!}
        {!! Form::text('nombre', '',  ['class' => 'form-control', 'placeholder' => 'Tu Nombre']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('apellido', 'Apellido') !!}
        {!! Form::text('apellido', '',  ['class' => 'form-control', 'placeholder' => 'Tu Apellido']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('email', 'Direccion de E-mail') !!}
        {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'ejemplo@mail.com']) !!}
    </div>
    <button type="submit" class="btn btn-primary">Subscribirse</button>
</div>
{!! Form::close() !!}
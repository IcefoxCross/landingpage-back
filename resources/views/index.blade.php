<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        {!! Form::open(array('route'=>'subs.store','method'=>'POST')) !!}
            {!! Form::text('nombre') !!}
            {!! Form::text('apellido') !!}
            {!! Form::email('email') !!}
            <button type="submit">Subscribirse</button>
        {!! Form::close() !!}
    </div>
</body>
</html>
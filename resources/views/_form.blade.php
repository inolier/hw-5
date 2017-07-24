<div class="form-group">
  {!! Form::label('name') !!}
  {!! Form::text('name', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
  {!! Form::label('surname') !!}
  {!! Form::text('surname', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
  {!! Form::label('gender') !!}
  {!! Form::select('gen', ['M' => 'Male', 'F' => 'Female']) !!}
</div>
<div class="form-group">
  {!! Form::label('e-mail') !!}
  {!! Form::text('email', null, ['class' => 'awesome']) !!}
</div>
<div class="form-group">
  {!! Form::label('phone') !!}
  {!! Form::text('phone', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
  {!! Form::label('login') !!}
  {!! Form::text('login', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
  {!! Form::label('password') !!}
  {!! Form::text('password', null, ['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
  {!! Form::submit('Send', ['class'=>'btn btn-primary']) !!}
</div>

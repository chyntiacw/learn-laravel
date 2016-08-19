<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
@extends('layouts.master')
@section('content')

<div class="row">
<div class="col-lg-12">
<h1>Buat Data Baru</h1>

<!-- jika terjadi error, maka akan menampilkan pesan -->
@if ($errors->any())

<ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
        @endforeach
</ul>
@endif

{!! Form::open(['url' => 'pegawai']) !!}

<div class="form-group">
      {!! Form::label('nama', 'Nama') !!}
      {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
</div>

<div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'masukan email']) !!}
</div>

<div class="form-group">
      {!! Form::label('level', 'Level') !!}
      {!! Form::select('level', [' ' => 'Pilih Level', '1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3'], null, ['class' => 'form-control']) !!}
</div>

    {!! Form::submit('Buat data pegawai', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>
</div>
@stop
</body>
</html>

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
<h1>Daftar Pegawai</h1>

<!-- digunakan untuk menampilkan pesan -->
@if (Session::has('message'))

<div class="alert alert-info">{{ Session::get('message') }}</div>

@endif

<table class="table table-striped table-bordered">
<thead>
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Level</td>
		<td>Actions</td>
	</tr>
</thead>

<tbody>
    @foreach($pegawai as $key => $value)
<tr>
	<td>{{ $value->id }}</td>
	<td>{{ $value->nama }}</td>
	<td>{{ $value->email }}</td>
	<td>{{ $value->level }}</td>
	
            <!-- untuk menambahkan tombol tampil, edit, dan hapus -->
	<td>
			<a class="btn btn-small btn-success" href="{{ URL('pegawai/' . $value->id) }}">Tampilkan Data</a>
			<a class="btn btn-small btn-warning" href="{{ URL('pegawai/' . $value->id . '/edit') }}">Ubah Data</a>
					{!! Form::open(['url' => 'pegawai/' . $value->id, 'class' => 'pull-right']) !!}
						{!! Form::hidden('_method', 'DELETE') !!}
						{!! Form::submit('Hapus Data', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
	</td>
</tr>
    @endforeach
</tbody>
</table>

</div>
</div>
@stop
</body>
</html>

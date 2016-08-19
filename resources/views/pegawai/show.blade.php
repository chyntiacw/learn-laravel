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
	<h1>Tampilkan Data Pegawai</h1>
		<div class="jumbotron text-center">
		<h2>{{ $pegawai->nama }}</h2>
					<strong>Email :</strong> {{ $pegawai->email }}
					<strong>Level :</strong> {{ $pegawai->level }}
		</div>
	</div>
</div>
@stop
</body>
</html>

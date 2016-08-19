<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div class="container">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
        <a class="navbar-brand" href="{{ URL('pegawai') }}">Data Pegawai</a>
</div>
<ul class="nav navbar-nav">
	<li><a href="{{ URL('pegawai') }}">Lihat Daftar</a></li>
	<li><a href="{{ URL('pegawai/create') }}">Buat Data Baru</a></li>
</ul>
</nav>
</body>
</html>

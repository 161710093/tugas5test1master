<!DOCTYPE html>
<html>
<head>
	<title>Latihan Blade Templating</title>
</head>
<body>

	<!-- menambahkan header -->
 @include('partrials.header')

<!-- menambahkan kosong  yang bisa di isi -->
 @yield('konten')

 	<!-- menambahkan sebuah footer -->
@include ('partrials.footer')

</body>
</html>
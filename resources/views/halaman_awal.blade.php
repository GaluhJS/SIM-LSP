<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container-fluid" style="background-image: url({{ asset('images/blue_mountain.jpg') }});overflow-y: hide; height: 678px; background-size: 1400px;">
		<div class="col-md-12" style="margin-top: 200px;">
			<h1 style="font-size: 50px; text-align: center; color: white; font-family: monospace;">LEMBAGA SERTIFIKASI PROFESI</h1>
			<div class="col-md-12" style="text-align: center;">
				<div class="col-md-8 col-md-offset-2" style="">
					<a href="{{ url('apl01') }}" class="btn btn-default">PESERTA LSP</a>
					<a href="{{ route('login') }}" class="btn btn-default">ASSESOR LSP</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
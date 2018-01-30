<html>
	<head>
		<meta charset="UTF-8">
		<title>Data Siswa</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<center>
			@foreach ($siswa as $a)
				<h3><b>{{$a->nama}}</b></h3>
				<h5>Mata Pelajaran : 
					@foreach($a->mapel as $b) 
						{{$b->namamapel}} 
					@endforeach
				</h5>
				<h4>
					<hr>Nama Wali : <strong>{{$a->wali->nama}}</strong>
					<hr>Nama Guru : <strong>{{$a->guru->nama}}</strong>
					<hr>Kelas : <strong>{{$a->kelas->namakelas}}</strong>
				</h4>
				<hr/>
			@endforeach
			</center>
		</div>
	</body>
</html>
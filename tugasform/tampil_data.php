<!DOCTYPE html>
<html>
<head>
	<title>Tampilkan Data</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <style> 
            body {
                    background: url(img/a.jpg);
                    background-size: 20% 20%;
                    background-repeat: repeat;
                }
</style>
</head>
<body>
	<div class="container">
		<h3>Sosial Media Job House</h3>
		<ul class="nav nav-tabs">
				<li><a href="registrasi.html">Registrasi</a></li>
				<li class="active"><a href="#">Daftar Akun</a></li>
		</ul>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3>Daftar Akun</h3>
			</div>
			<div class="panel-body">
			<?php
			$fs = fopen('save.txt','r') or die("Tidak dapat mebuka file");
				echo "<table class='table table-condensed table-bordered table-striped'> 
					<tr>
						<th>Nomor Identitas</th>
						<th>Nama</th>
						<th>Password</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Agama</th>
						<th>No Telepon</th>
						<th>Kewarganegaraan</th>
						<th>Pendidikan Terakhir</th>
					</tr>";
				while (list($noid, $nama, $pass, $templhr, $tgllahir , $jenkel, $alamat, $agama, $telp, $kwrg, $pend) = fgetcsv($fs,1024,',')){
				echo "<tr>".
						"<td>".$noid."</td>".
						"<td>".$nama."</td>".
						"<td>".$pass."</td>".
						"<td>".$templhr."</td>".
						"<td>".$tgllahir."</td>".
						"<td>".$jenkel."</td>".
						"<td>".$alamat."</td>".
						"<td>".$agama."</td>".
						"<td>".$telp."</td>".
						"<td>".$kwrg."</td>".
						"<td>".$pend."</td>".
					"</tr>";
				}
				echo "</table>";
			?>
			</div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Daftar</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

      <style> 
            body {
                    background: url(img/a.jpg);
                    background-size: 28% 28%;
                    background-repeat: repeat;
                }
</style>
</head>
<body>
	<div class="container">
  <div id="logo"><h1>Sosial Media Job House</h1></div>
		<ul class="nav nav-tabs">
				<li><a href="registrasi.html">Registrasi</a></li>
				<li><a href="tampil_data.php">Daftar Akun</a></li>
		</ul>
		<?php
			$noid = $_POST['noid'];
			$nama = $_POST['nama'];	
			$pass = $_POST['pass'];
			$templhr = $_POST['templhr'];
			$tgllahir = $_POST['tgllahir'];
			$jenkel = $_POST['jenkel'];
			$alamat = $_POST['alamat'];
			$agama = $_POST['agama'];
			$telp= $_POST['telp'];
			$kwrg = $_POST['kwrg'];
			$pend = $_POST['pend'];
			
			$outputstring = $noid.",".$nama.",".$pass.",".$templhr.",".$tgllahir.",".$jenkel.","
			.$alamat.",".$agama.",".$telp.",".$kwrg.",".$pend."\n";

			$fh = fopen('save.txt', 'a+') or die("Tidak dapat membuka file");

			fwrite($fh, $outputstring, strlen($outputstring));
			fclose($fh);
			echo "
			<div class='well well=lg'>
					<h1>Selesai ! Data Telah Tersimpan</h1>
			</div>";
		?>
</body>
</html>
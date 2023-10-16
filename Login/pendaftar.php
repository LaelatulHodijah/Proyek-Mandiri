<?php
	session_start();
	include 'functions.php';

	$pendaftar = "SELECT * FROM pendaftar";
	$query = mysqli_query($conn, $pendaftar);
	if (isset($_POST["cari"])) {
		$pendaftar = cari($_POST["keyword"]);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/regular.css" integrity="sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/brands.css" integrity="sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style1.css">
		<title>PEMIRA 2024</title>
	</head>
    <style>
		html {
			overflow-x: hidden;
		}
		.container-fluid1 {
			height: 609px;
		}
		.container-fluid {
			background-attachment: fixed;
		}
		.navbar {
			background-color: #483D8B !important;
		}
		.container {
			margin-bottom: 50px;
		}
		.pendaftar {
			background-image: url(img/Simple-Background-Images-53.png);
			background-repeat: no-repeat;
			background-position: bottom;
			height: 650px;
			padding-top: 15px !important;
			margin-bottom: 10px;
		}
		.daftar {
			border-radius: 10px;
			background-color: white;
		}
		button {
			margin-bottom: 10px;
  			box-shadow: 0 9px #999 !important;
  			 border: none !important;
  			  outline: none !important;
		}
		button:hover {background-color: #3e8e41;}
		button:active {
		  background-color: #3e8e41 !important;
		  box-shadow: 0 3px #666 !important;
		  transform: translateY(2px) !important;
		}
		img {
			width: 300px;
			height: 200px;
			position: relative;
			left: 30px;
			transition: .2s;
		}
		img:hover {
			box-shadow: 5px 5px 60px 5px black;
		}
	</style>
    <body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- Brand -->
			<a class="navbar-brand" href="index.php">PEMIRA 2024</a>
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navbar-->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item navbar1">
						<a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Rumah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" href="daftar.php"><i class="fas fa-paper-plane"></i> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" href="pendaftar.php"><i class="fas fa-list"></i> Pendaftaran</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<h3 class="text-center">Pendaftar Calon Presiden dan Wakil Presiden POLINELA</h3>
			<hr>
			<table class="table text-center table-stripped table-hover table-responsive-xl-lg-md-sm">
				<caption>Jumlah Pendaftar : <?= mysqli_num_rows($query); ?></caption>
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">NPM</th>
						<th scope="col">Nama</th>
						<th scope="col">Tempat, Tanggal Lahir</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Alamat</th>
						<th scope="col">Angkatan</th>
						<th scope="col">Agama</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($query as $row) : ?>
					<tr>
						<td><?= $i; ?></td>
						<td scope="row"><?= $row["nis"]; ?></td>
						<td><?= $row["nama"] ?></td>
						<td><?= $row["tempat_lahir"]; ?>, <?= $row["tanggal_lahir"]; ?></td>
						<td><?= $row["jenis_kelamin"] ?></td>
						<td><?= $row["alamat"] ?></td>
						<td><?= $row["angkatan"] ?></td>
						<td><?= $row["agama"] ?></td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<sript src= "bootstrap-4.0.0/dist/js/bootstrap.min.js"></sript>
		<script src="jquery.min.js"></script>
	</body>
</html>
<?php
include 'functions.php';
if (isset($_POST["submit"])) {

	if (tambah($_POST) > 0) {
			echo "<script>
		alert('Berhasil ditambahkan');
		document.location.href = 'pendaftar.php';
		</script>";
		} else {
			echo "<script>
		alert('Gagal ditambahkan');
		document.location.href = 'pendaftar.php';
		</script>";
	}
}
?>
<!-- Navbar -->
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
		#drop_file_zone {
			background-color: #ffffff;
			border: #ded9d9 2px dashed;
			width: 290px;
			height: 45px;
			padding: 8px;
			font-size: 12px;
		}
		#drag_upload_file {
  width:50%;
  margin:0 auto;
}
#drag_upload_file p {
  text-align: center;
}
#drag_upload_file #selectfile {
  display: none;
}
	</style>

<!--Daftar-->
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
						<a class="nav-link ml-2" href="login.php"><i class="fas fa-paper-plane"></i> Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2" href="pendaftar.php"><i class="fas fa-list"></i> Pendaftaran</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<h3 class="text-center">Formulir Pendaftaran Calon Presiden dan Wakil Presiden POLINELA</h3>
			<hr class="col-md-6">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<form action="" method="post">
						<div class="form-group">
							<label for="nis">NPM : </label>
							<input type="number" class="form-control" id="nis" placeholder="NPM"autocomplete="off" name="nis">
						</div>
						<div class="form-group">
							<label for="nama">Nama Lengkap : </label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap"autocomplete="off" name="nama">
						</div>
						<div class="form-group">
							<label for="tempat">Tempat Lahir :</label>
							<input type="text" class="form-control" id="tempat" placeholder="Tempat"autocomplete="off" name="tempat_lahir">
						</div>
						<div class="form-group">
							<label for="tempat">Tanggal Lahir :</label>
							<input type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal_lahir">
						</div>
						<label for="jenis">Jenis Kelamin :	</label>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="jenis_kelamin" value="l" id="laki">
							<label class="custom-control-label" for="laki">
								Laki-Laki
							</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="jenis_kelamin" value="p" id="perempuan">
							<label class="custom-control-label" for="perempuan">
								Perempuan
							</label>
						</div>
						<br>
						<div class="form-group">
							<label for="alamat">Alamat : </label>
							<input type="text" class="form-control" id="alamat" placeholder="Alamat Anda" autocomplete="off" name="alamat">
						</div>
						<label for="jenis">Angkatan :	</label>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="angkatan" value="2022" id="2022">
							<label class="custom-control-label" for="2022">
								2022
							</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input class="custom-control-input" type="radio" name="angkatan" value="2023" id="2023">
							<label class="custom-control-label" for="2023">
								2023
							</label>
						</div>
						<p>
							<label for="agama">Agama: </label>
							<select type="text" class="form-control" id="agama" placeholder="Agama" autocomplete="off" name="agama">
								<option>Islam</option>
								<option>Kristen</option>
								<option>Hindu</option>
								<option>Budha</option>
								<option>Atheis</option>
							</select>
						</p>
						<div class="form-group">
							<label for="prodi">Program Studi : </label>
							<input type="text" class="form-control" id="prodi" placeholder="Program Studi" autocomplete="off" name="prodi">
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan : </label>
							<input type="text" class="form-control" id="jurusan" placeholder="Jurusan"autocomplete="off" name="jurusan">
						</div>
						<p>
							<label for="jabatan">Jabatan Yang Dipilih : </label>
							<select type="text" class="form-control" id="jabatan" placeholder="Jabatan" autocomplete="off" name="jabatan">
								<option>Calon Presiden</option>
								<option>Calon Wakil Presiden</option>
							</select>
						</p>
						<label for="file1">Surat Keterangan Aktif : </label>
								<div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
								<div id="drag_upload_file">
								<p><input type="button" id="file1" autocomplete="off" name="file1" value="Select File" onclick="file_explorer();" /></p>
       							<input type="file1" id="selectfile" />
							</div>
						</div>

						<br>
						<button type="submit" class="btn btn-success col-md-12" name="submit">Daftar</button>
					</form>
				</div>
			</div>
		</div>
		<sript src= "bootstrap-4.0.0/dist/js/bootstrap.min.js"></sript>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
	</body>
</html>
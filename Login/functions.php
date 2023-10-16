<?php 
	$conn = mysqli_connect("localhost", "root", "", "proyek_mandiri");

	function query ($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data) {
		global $conn;
		$nis = htmlspecialchars($data["nis"]);
		$nama = htmlspecialchars($data["nama"]);
		$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
		$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
		$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$angkatan = htmlspecialchars($data["angkatan"]);
		$agama = htmlspecialchars($data["agama"]);
		$prodi = htmlspecialchars($data["prodi"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$jabatan = htmlspecialchars($data["jabatan"]);
		$file1 = htmlspecialchars($data["file1"]);


		$query = "INSERT INTO pendaftar VALUES ('', '$nis', '$nama', '$tempat_lahir', '$tanggal_lahir', 
		'$jenis_kelamin', '$alamat', '$angkatan', '$agama','$prodi','$jurusan', '$jabatan', '$file1')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
	
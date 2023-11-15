<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$nis = mysqli_real_escape_string($db, trim($_POST['nis']));
	$partno = mysqli_real_escape_string($db, trim($_POST['partno']));
	$partname = mysqli_real_escape_string($db, trim($_POST['partname']));
	$qty = mysqli_real_escape_string($db, trim($_POST['qty']));
	$box = mysqli_real_escape_string($db, trim($_POST['box']));
	$supp = $_POST['supp'];
	$lp = $_POST['lp'];
	$qtyditerima = $_POST['qtyditerima'];
	$remarks = mysqli_real_escape_string($db, trim($_POST['remarks']));

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO is_siswa(
                                        nis,
                                        partno,
                                        partname,
                                        qty,
								box,
                                        supp,
                                        lp,
                                        qtyditerima,
                                        remarks)	
                                  VALUES('$nis',
                                         '$partno',
                                         '$partname',
                                         '$qty',
								 '$box',
                                         '$supp',
                                         '$lp',
                                         '$qtyditerima',
                                         '$remarks')");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		echo "Error: " . mysqli_error($db); // Display MySQL error for debugging
		// Alternatively, you can log the error to a file or email it to yourself
		// header('location: index.php?alert=1');
	}
}

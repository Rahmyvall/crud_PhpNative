<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['nis'])) {
		$nis = mysqli_real_escape_string($db, trim($_POST['nis']));
		$partno = mysqli_real_escape_string($db, trim($_POST['partno']));
		$partname = mysqli_real_escape_string($db, trim($_POST['partname']));
		$qty = mysqli_real_escape_string($db, trim($_POST['qty']));
		$box = mysqli_real_escape_string($db, trim($_POST['box']));
		$supp = $_POST['supp'];
		$lp = $_POST['lp'];
		$iami = $_POST['iami'];
		$qtyditerima = mysqli_real_escape_string($db, trim($_POST['qtyditerima']));
		$remarks = $_POST['remarks'];

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE is_siswa SET  
                                            partno = '$partno',
                                            partname = '$partname',
                                            qty = '$qty',
								    box = '$box',
                                            supp = '$supp',
                                            lp = '$lp',
                                            iami = '$iami',
                                            qtyditerima = '$qtyditerima',
                                            remarks = '$remarks'
                                      WHERE nis = '$nis'");

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}
	}
}
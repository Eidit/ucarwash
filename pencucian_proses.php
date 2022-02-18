
	<?php
	include 'conn/koneksi.php';
	$id_pencucian = null;
	$nm_pencucian = $_POST['nm_pencucian'];
	$alamat_pencucian = $_POST['alamat_pencucian'];
	$notelp_pencucian = $_POST['notelp_pencucian'];
	$hari_bk = $_POST['hari_bk'];
	$jam_bk = $_POST['jam_bk'];
	$jam_ttp = $_POST['jam_ttp'];
	$longtitude = $_POST['longtitude'];
	$latitude = $_POST['latitude'];
	$folder = 'gambar/';
	$namafoto = $_FILES['gambar']['name'];		
	$foto = $folder . $namafoto;

	$input = mysqli_query($koneksi,"INSERT into tb_pencucian values('$id_pencucian','$nm_pencucian','$alamat_pencucian','$notelp_seri','$hari_bk','$jam_bk',
																	'$jam_ttp','$longtitude','$latitude','$namafoto')") or die(mysqli_error());


	header("location:iindex.php");
	 
	if ($input) {
	$upload = move_uploaded_file($_FILES['gambar']['tmp_name'], $foto);
	if($upload){
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	header("location:iindex.php");
	}	
}
	else {
		echo "<script> alert('Data Gagal Di Input') </script>";
		header("location:tambah_pencucian.php");
	}

	?>

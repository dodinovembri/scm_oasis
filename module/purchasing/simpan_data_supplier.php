<?php  
	include 'module/koneksi.php';

	$id_supplier = $_POST['id_supplier'];
	$nama_supplier = $_POST['nama_supplier'];
	$email_supplier = $_POST['email_supplier'];
	$no_hp_supplier = $_POST['no_hp_supplier'];
	$alamat_supplier = $_POST['alamat_supplier'];



	
	$q = mysqli_query($koneksi, "INSERT INTO supplier (`id_supplier`, `nama_supplier`, `email`, `no_hp`, `alamat`) VALUES ('$id_supplier', '$nama_supplier', '$email_supplier', '$no_hp_supplier', '$alamat_supplier')");
	if (!$q) {
		die("Penyimpanan gagal");
	}
	echo "<script>
			window.location.href = '?module=suplier';
		</script>";
?>

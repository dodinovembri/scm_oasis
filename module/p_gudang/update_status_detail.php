<?php  
	include 'module/koneksi.php';
	$id_trx_bm = $_GET['id_trx_bm'];
	$q = mysqli_query($koneksi, "SELECT * FROM bahan_baku_masuk WHERE status='B' AND id_trx_bm='$id_trx_bm'");
?>
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Bahan Baku Sudah Sampai ?");
 if (tanya == true) return true;
 else return false;
 }</script>

<br><br><br><br>
 		<div class=main-white style="background-color: #e5e5e5;">
			<div class=container> 
          		<div class=row> 
          				<h1 align="center">Bahan Baku Masuk Dari Supplier</h1><br>          					          					
								<table class="table">
									<tr id="th">
										<td>No</td>
										<td>ID Transaksi</td>
										<td>Email Supplier</td>
										<td>Tanggal</td>
										<td>Komposisi</td>
										<td>Jumlah</td>
										<td>Status</td>
									</tr>
									<?php $no = 1;
									while ($r = mysqli_fetch_array($q)) { ?>
										<tr id="tb">
											<td><?php echo $no++; ?></td>
											<td><?php echo $r['id_trx_bm']; ?></td>
											<td><?php echo $r['email_supplier']; ?></td>
											<td><?php echo $r['tanggal']; ?></td>
											<td><?php echo $r['komposisi']; ?></td>
											<td><?php echo $r['jumlah']; ?></td>
											<td>												
												<a onclick="return konfirmasi();" href="?module=update_status_persatu&id_trx_bm=<?php echo $id_trx_bm; ?>&id_pesanan=<?php echo $r['id_pesanan']; ?>"><i class="fas fa-check"></i> Masuk</a>											
											</td>
										</tr>
									<?php	} ?>
								</table>
          		</div>
          	</div>
  		</div>
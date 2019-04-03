<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_barang.xls");
	?>
	<table>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Kondisi</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","root","lsp");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tbl_barang");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['jenis_barang']; ?></td>
			<td><?php echo $d['status']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
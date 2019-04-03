<!DOCTYPE html>
<html>
<head>
	<title>Import Excel </title>
</head>
<style>
	body{
		margin: 0 0 0 0;
	}
    ul{
        overflow: hidden;
        margin: 0;
        padding: 0;
        list-style: none;
        background-color: dodgerblue;
        box-shadow: 2px 2px 2px #e1e1e1;
    }
    li a{
        color:white;
        float: left;
        padding: 10px;
        text-decoration: none;
    }
    li a:hover{
        text-decoration: none;
        background-color: #e1e1e1;
    }
</style>
<body>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="tambah_barang.php">Tambah barang</a></li>
        <li><a href="lihat_barang.php">Lihat barang</a></li>
        <li><a href="upload.php">Import</a></li>
        <!-- <li style="float: right"><a href="auth/logout.php?logout">Logout</a></li> -->
    </ul>
<?php 
include '../db/koneksi.php';
?>

<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
	Pilih File: 
	<input name="filepegawai" type="file" required="required"> 
	<input name="upload" type="submit" value="Import">
</form>

<br/><br/>

</body>
</html>
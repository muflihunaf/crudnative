<?php
    include '../db/koneksi.php';
    include '../db/fungsi.php';
    
    if (isset($_GET['id_barang'])) {
        $id = $_GET['id_barang'];
        $query = mysqli_query($host,"SELECT * FROM tbl_barang WHERE id_barang = '$id'");
        $list = mysqli_fetch_assoc($query);
        $nama = $list['nama_barang'];
        $jenis = $list['jenis_barang'];
        $status = $list['status'];
        $tanggal = date('d-m-Y');
        $sy = mysqli_query($host,"INSERT INTO tmp_barang(nama_barang,jenis_barang,status,tanggal) VALUES('$nama','$jenis','$status','$tanggal')");
        hapus($host,$id);

        ?>
        <script type="text/javascript"> window.location = "lihat_barang.php" </script>
        <?php
    }


?>
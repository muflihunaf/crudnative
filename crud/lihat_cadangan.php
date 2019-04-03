<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="../asset/fonts/css/font-awesome.min.css">
    <script src="../asset/js/jquery.min.js"></script>
    <script src="../asset/js/bootstrap.min.js"></script>
</head>
<style>
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
        <li><a href="lihat_cadangan.php">Temporary</a></li>
        <form action="cari.php" method="get">
        <li style="float:right; margin-top:11px;"><input type="submit" name="cari" value="Cari"></li>
        <li style="float:right; margin-top:8px;"><input type="text" name="hasil" placeholder="Cari..."></li>

        </form>
        <!-- <li style="float: right"><a href="auth/logout.php?logout">Logout</a></li> -->
    </ul>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th><a href="lihat_cadangan.php?nama_barang">Nama Barang</a></th>
                <th><a href="lihat_cadangan.php?jenis_barang">Jenis Barang</a></th>
                <th><a href="lihat_cadangan.php?kondisi">Kondisi</a></th>
                <th><a href="lihat_cadangan.php?tanggal">tanggal</a></th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include '../db/koneksi.php';
                $no = 1;
                if (isset($_GET['nama_barang'])) {
                    $query = mysqli_query($host, "SELECT * FROM tmp_barang ORDER BY nama_barang ASC");
                }elseif (isset($_GET['jenis_barang'])) {
                    $query = mysqli_query($host, "SELECT * FROM tmp_barang ORDER BY jenis_barang ASC");
                }elseif (isset($_GET['kondisi'])) {
                    $query = mysqli_query($host, "SELECT * FROM tmp_barang ORDER BY status ASC");
                }else{
                    $query = mysqli_query($host, "SELECT * FROM tmp_barang ");
                }
                while ($list = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $list['nama_barang'] ?></td>
                <td><?= $list['jenis_barang'] ?></td>
                <td><?= $list['status'] ?></td>
                <td><?= $list['tanggal'] ?></td>
                <td> <a class="btn btn-danger" href="hapus.php?id_tmp=<?=$list['id_tmp']?>">Hapus</a> </td>
            </tr>
            <?php 
                }
                ?>
                <tr>
                        <td colspan="6"> <a href="export.php" class="btn btn-success">Export</a> </td>
                </tr>
        </tbody>
    </table>

</body>
</html>
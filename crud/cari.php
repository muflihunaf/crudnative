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
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Kondisi</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include '../db/koneksi.php';
                if (isset($_GET['cari'])) {
                    $cari = $_GET['hasil'];
                    $no = 1;
                    $query = mysqli_query($host, "SELECT * FROM tbl_barang WHERE nama_barang LIKE '%".$cari."%'");
                    while ($list = mysqli_fetch_assoc($query)) { echo "Menampilkan Hasil Pencarian $cari; " ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $list['nama_barang'] ?></td>
                <td><?= $list['jenis_barang'] ?></td>
                <td><?= $list['status'] ?></td>
                <td> <a href="edit.php?id_barang=<?=$list['id_barang']?>">Edit</a> </td>
                <td> <a href="hapus.php?id_barang=<?=$list['id_barang']?>">Hapus</a> </td>
            </tr>
            <?php 
                }
                ?>
        </tbody>
    </table>

</body>
</html>
        <?php    }
        ?>
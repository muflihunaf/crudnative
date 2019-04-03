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
    ul {
        overflow: hidden;
        margin: 0;
        padding: 0;
        list-style: none;
        background-color: dodgerblue;
        box-shadow: 2px 2px 2px #e1e1e1;
    }

    li a {
        color: white;
        float: left;
        padding: 10px;
        text-decoration: none;
    }

    li a:hover {
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
        <li style="float: right"><a href="auth/logout.php?logout">Logout</a></li>
    </ul>
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" class="panel panel-body form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-2">Nama Barang</label>
                    <div class="col-md-2">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Jenis Barang</label>
                    <div class="col-md-2">
                        <input type="text" name="jenis" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Status</label>
                    <div class="col-md-2">
                        <input type="text" name="status" class="form-control">
                    </div>
                </div>
                <div class=" col-md-3 col-md-offset-3">
                    <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php 
    include '../db/koneksi.php';
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $status = $_POST['status'];
        $simpan = mysqli_query($host, "INSERT INTO tbl_barang(nama_barang,jenis_barang,status) VALUES('$nama','$jenis','$status')");
        // var_dump($simpan);
        
        if ($simpan) { ?>
<script type="text/javascript">
    window.location = "lihat_barang.php"
</script>
<?php 
        }
        

    }

?>
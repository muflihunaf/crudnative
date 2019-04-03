<?php
    error_reporting(0);
    function hapus($host,$id){
        $query = mysqli_query($host,"DELETE FROM tbl_barang WHERE id_barang = '$id'");
    }

?>
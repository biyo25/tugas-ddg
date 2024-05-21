
<?php
include_once "koneksi.php";

if (isset($_POST['add_buku'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];

    $insert = $koneksi->query(
        "INSERT INTO buku 
        (id, Nama_Buku, Tahun_Terbit, stok) 
        values
        ($id, '$nama', '$tahun', $stok)");

    if ($insert) {
        header('Location: data_buku.php');
    }else{
        echo "Data Buku Gagal masuk";
        
    }
}

if(isset($_POST['update_buku'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];

    $insert = $koneksi->query(
        "UPDATE buku SET Nama_Buku='$nama', Tahun_Terbit = '$tahun', stok=$stok 
        where id = $id
        ");

    if ($insert) {
        header('Location: data_buku.php');
    }else{
        echo "Data Buku Gagal masuk";
        
    }
}

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $delete = $koneksi->query(
        "DELETE from buku where id = $id
        ");
    if ($delete) {
        header('Location: data_buku.php');
    }else{
        echo "Data Buku Gagal masuk";
        
    }
}

?>

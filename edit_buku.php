
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Buku</title>
    <link rel="stylesheet" href="ddg.css">
</head>
<body>
    <div class="nav">
        <a href="Dassboard.php">Home</a>
        <a href="Data_buku.php">Data Buku</a>
        <a href="data pengguna.php">Data Pengguna</a>
    </div>

    <div class="content">
        <h1>Ini Form Edit Data Buku</h1>
        <?php
            include_once 'koneksi.php';
            $id = $_GET['id'];
            $buku = $koneksi->query("SELECT * FROM buku where id = $id ")->fetch_assoc();

            print_r($buku);
        ?>

        <form action="Handler_buku.php" method="post">
            <input type="hidden" name="update_buku" value="1">
            <div>
                <label for="">ID</label>
                <input type="number" value="<?php echo $buku['id'] ?>" name="id">
            </div>
            <div>
                <label for="">Nama</label>
                <input type="text" value="<?php echo $buku['Nama_Buku'] ?>" name="nama">
            </div>
            <div`>
                <label for="">Tahun</label>
                <input type="number" value="<?php echo $buku['Tahun_Terbit'] ?>" name="tahun">
            </div>
            <div>
                <label for="">Stok</label>
                <input type="text" value="<?php echo $buku['stok'] ?>" name="stok">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>

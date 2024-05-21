
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <a href="Dassboard.php">Home</a>
        <a href="Data_buku.php">Data Buku</a>
        <a href="data pengguna.php">Data Pengguna</a>
    </div>

    <div class="content">
        <h1>Ini Form Data Buku</h1>

        <form action="handler.php" method="post">
            <input type="hidden" name="add_buku" value="1">
            <div>
                <label for="">ID</label>
                <input type="number" name="id">
            </div>
            <div>
                <label for="">Nama</label>
                <input type="text" name="nama">
            </div>
            <div`>
                <label for="">Tahun</label>
                <input type="number" name="tahun">
            </div>
            <div>
                <label for="">Stok</label>
                <input type="text" name="stok">
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>

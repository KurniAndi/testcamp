<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php

        include "function.php";


        function input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama = input($_POST["nama"]);
            $category = input($_POST["category"]);
            $deskripsi = input($_POST["deskripsi"]);
            $stok = input($_POST["stok"]);
            $gambar = input($_POST["gambar"]);





            $sql = "insert into book (nama,deskripsi,category,stok,gambar) values
		('$nama','$category','$deskripsi','$stok','$gambar')";


            $hasil = mysqli_query($kon, $sql);


            if ($hasil) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }

        ?>

        <h2>Tambah Buku</h2>


        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Buku</label>
                <input type="text" name="nama" class="form-control" required />

            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" class="form-control" required />
            </div>

            <div class="form-group">
                <label>Deskripsi Buku</label>
                <input type="text" name="deskripsi" class="form-control" required />

            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" required />

            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" required />

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</body>

</html>
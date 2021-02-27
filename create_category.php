<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Category</title>
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

            $id = input($_POST["id"]);
            $category = input($_POST["nama"]);





            $sql = "insert into category (id,nama) values ('$id,'$category')";


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
                <label>Nomer Buku</label>
                <input type="text" name="id" class="form-control" required />

            </div>
            <div class="form-group">
                <label>Nama Category</label>
                <input type="text" name="nama" class="form-control" required />

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</body>

</html>
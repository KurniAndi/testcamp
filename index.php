<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Article</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <br>
        <h4>Data Article</h4>
        <?php

        include "function.php";


        if (isset($_GET['id'])) {
            $id = htmlspecialchars($_GET["id"]);

            $sql = "delete from article where id='$id' ";
            $hasil = mysqli_query($kon, $sql);


            if ($hasil) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>
        <table class="table table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                    <th>Category</th>
                    <th>Deskripsi</th>
                    <th>Stock</th>
                    <th>Gambar</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <?php
            include "function.php";
            // $sql = "select * from book";
            $sql = "select * from book join category on category.id = book.id";
            $hasil = mysqli_query($kon, $sql);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $no++;

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["nama"];   ?></>
                        <td><?php echo $data["nama_category"];   ?></td>
                        <td><?php echo $data["deskripsi"];   ?></td>
                        <td><?php echo $data["stok"];   ?></td>
                        <td><?php echo $data["gambar"];   ?></td>
                        <td>
                            <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $data['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <a href="create.php" class="btn btn-primary" role="button">Tambah Article</a>
        <a href="create_category.php" class="btn btn-primary" role="button">Tambah Category</a>

    </div>
</body>

</html>
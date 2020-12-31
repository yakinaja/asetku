<?php


// Koneksi database
$db = mysqli_connect("localhost", "root", "", "aset");

// ambil data tabel
$result = mysqli_query($db, "SELECT * FROM asset");

// ambil data dari form
if( isset($_POST["tambah"])) {

    $nama = htmlspecialchars($_POST["nama"]);
    $kategori = htmlspecialchars($_POST["kategori"]);
    $tahun = htmlspecialchars($_POST["tahun"]);
    $nilai = htmlspecialchars($_POST["nilai"]);
    

    // query insert
    $query = "INSERT INTO asset VALUES('', '$nama', '$kategori', '$tahun', '$nilai')";
    mysqli_query($db,$query);

    echo "<script>
    document.location.href = 'asset.php';
</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aset</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/asset.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

</head>

<body>
    <section class="heading">
        <a href="dashboard.php"><img class="mt-1" src="images/logo-4.png" width="85" alt=""></a>
    </section>
    <section class="add mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Aset Perusahaan</h2>
                </div>
            </div>
            <div class="row mt-3 justify-content-end mr-1">
                <button class="btn btn-success" data-toggle="modal" data-target="#form">Tambah</button>
            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Asset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input name="nama" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="Kendaraan">Kendaraan</option>
                                    <option value="Bangunan">Bangunan</option>
                                    <option value="Barang">Barang</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input name="tahun" type="date" class="form-control" id="tahun" aria-describedby="emailHelp"
                                    placeholder="Tahun">
                            </div>                                          

                            <div class="form-group">
                                <label for="nominal">Nominal</label>
                                <input name="nilai" type="text" class="form-control" id="nominal" aria-describedby="emailHelp"
                                    placeholder="Nominal">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button name="tambah" type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="karyawan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["jenis"] ?></td>
                                <td><?php echo $row["tahun"] ?></td>
                                <td><?php echo $row["nilai"] ?></td>
                                <td>
                                    <a href="hapus_asset.php?id=<?php echo $row["id"];?>"><button name="hapus" class="btn btn-danger">Hapus                                       
                                    </button>
                                    </a>
                            </td>
                            </tr>  
                            <?php $i++ ?>         
                            <?php endwhile; ?>                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <footer >
    <p class="mt-2 ml-3 ">© 2020 Asetku. All Rights Reserved.</p>
    </footer>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
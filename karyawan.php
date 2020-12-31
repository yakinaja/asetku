<?php

// Koneksi database
$db = mysqli_connect("localhost", "root", "", "aset");

// ambil data tabel
$result = mysqli_query($db, "SELECT * FROM tabel_karyawan");

// ambil data dari form
if( isset($_POST["tambah"])) {

    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $jabatan = htmlspecialchars($_POST["jabatan"]);
    $hp = htmlspecialchars($_POST["hp"]);
    $darah = htmlspecialchars($_POST["darah"]);

    // query insert
    $query = "INSERT INTO tabel_karyawan VALUES('', '$darah', '$nama', '$email', '$gender', '$jabatan', '$hp')";
    mysqli_query($db,$query);

    echo "<script>
    document.location.href = 'karyawan.php';
</script>";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/karyawan.css">

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
                    <h2>Data Karyawan</h2>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kaeyawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input name="nama" type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="kelamin">Gender</label>
                                <select type="text" name="gender" id="kelamin" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select type="text" name="jabatan" id="jabatan" class="form-control">
                                    <option value="Komisaris">Komisaris</option>
                                    <option value="Direktur">Direktur</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="hp">No.Handphone</label>
                                <input name="hp" type="text" class="form-control" id="hp" aria-describedby="emailHelp"
                                    placeholder="handphone">
                            </div>

                            <div class="form-group">
                                <label for="darah">Golongan Darah</label>
                                <select type="text" name="darah" id="darah" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
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
                                <th scope="col">Email</th>
                                <th scope="col">Handphone</th>
                                <th scope="col">Gender</th>                                
                                <th scope="col">Jabatan</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                            <tr>
                                <th scope="row"><?php echo $i ?></th>                                
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["hp"] ?></td>
                                <td><?php echo $row["gender"] ?></td>                               
                                <td><?php echo $row["jabatan"] ?></td>
                                <td><?php echo $row["darah"]?></td>
                                <td><a href="hapus.php?id=<?php echo $row["id"];?>">
                                <button name="hapus" class="btn btn-danger">Hapus</button>
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



    <footer>
    <p class="mt-2 ml-3 ">© 2020 Asetku. All Rights Reserved.</p>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
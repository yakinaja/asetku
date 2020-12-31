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
        <a href="http://"><img class="mt-1" src="images/logo-4.png" width="85" alt=""></a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kaeyawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="kelamin">Gender</label>
                                <select name="kelamin" id="kelamin" class="form-control">
                                    <option value="">Laki-laki</option>
                                    <option value="">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <option value="">Komisaris</option>
                                    <option value="">Direktur</option>
                                    <option value="">Karyawan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="hp">No.Handphone</label>
                                <input type="text" class="form-control" id="hp" aria-describedby="emailHelp"
                                    placeholder="handphone">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
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
                                <th scope="col">Gender</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Fajri Isnanto</td>
                                <td>fajri@google.com</td>
                                <td>Laki-laki</td>
                                <td>Direktur</td>
                                <td>
                                    <button class="btn btn-danger">Hapus</button>
                            </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Fajri Isnanto</td>
                                <td>fajri@google.com</td>
                                <td>Laki-laki</td>
                                <td>Direktur</td>
                                <td>
                                    <button class="btn btn-danger">Hapus</button>
                            </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Fajri Isnanto</td>
                                <td>fajri@google.com</td>
                                <td>Laki-laki</td>
                                <td>Direktur</td>
                                <td>
                                    <button class="btn btn-danger">Hapus</button>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

    <footer>

    </footer>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
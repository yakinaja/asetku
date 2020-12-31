<?php

// Koneksi database
$db = mysqli_connect("localhost", "root", "", "aset");

if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM akun WHERE username='$username'");

    if( mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if($password == $row["password"]) {

            header("Location:dashboard.php");
            exit;
        } else {
            header("Location:index.php");
            exit;
        }

    }

}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Asetku</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">              
                <img src="images/logo-3.png" width="150" alt="">
                <div class="login p-4 shadow p-3 mb-5 bg-white rounded">
                    <form action="" method="post">
                        <h3 class="text-center mb-4">Login</h3>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="username"
                                aria-describedby="emailHelp" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name=" password" type="password" class="form-control" id="password"
                                placeholder="Password">
                        </div>
                        <button name="login" type="submit" class="btn btn-block mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
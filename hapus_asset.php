<?php 

// koneksi
$db = mysqli_connect("localhost", "root", "", "aset");

$id = $_GET["id"];

// query hapus
mysqli_query($db, "DELETE FROM asset WHERE id =$id");

echo "<script>
document.location.href = 'asset.php';
</script>";
?>
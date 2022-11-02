<?php
include "koneksi.php";
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

$id = $_GET['id'];
$query = "DELETE FROM product WHERE id='$id'";
$result = mysqli_query($connect, $query);

if ($result) {
	echo "Data berhasil dihapus";
?>
<a href="index.php"> Lihat data </a>
<?php

}
else{
	echo "Data gagal dihapus" . mysqli_error($connect);
}
?>
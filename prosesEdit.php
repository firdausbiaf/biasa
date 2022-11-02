<?php
include "koneksi.php";
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

$id = $_GET['id'];
$nama = $_GET['name'];
$harga = $_GET['price'];

$query = "UPDATE product SET product_name='$nama', harga='$harga' WHERE id='$id'";
$result = mysqli_query($connect, $query);

if ($result) {
	echo "Berhasil update data";
?>
</br>
<a href="index.php"> Lihat data </a>
<?php
}
else{
	echo "Gagal update data" . mysqli_error($connect);
}
?>
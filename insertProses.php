

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	include "koneksi.php";
	$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['price'];

	$sql = "INSERT INTO product(id, product_name,harga)
	VALUES('$id', '$nama', '$harga')";

	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan";		
	}
	else{
		echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
	}
	mysqli_close($connect);
	?>
	</br>
	<a href="index.php"> Tampilkan </a>
</body>
</html>
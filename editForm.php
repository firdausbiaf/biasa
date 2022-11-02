<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
<?php
	include "koneksi.php";
	$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

	$id = $_GET['id'];
	$query = "SELECT * FROM product WHERE id = '$id'";
	$result = mysqli_query($connect, $query);
?>
<table>
	<form method="GET" action="prosesEdit.php">
		<?php
		$connect = mysqli_connect("localhost", "root", "", "prakwebdb");
		while ($row=mysqli_fetch_array($result)) {
		?>
	<tr>
		<td> Id </td>
		<td> <input type="number" name="id" value="<?php echo $row['id'];?>" readonly> </td>
	</tr>
	<tr>
		<td> Nama Produk </td>
		<td> <input type="text" name="name" value="<?php echo $row['product_name'];?>"> </td>
	</tr>
	<tr>
		<td> Harga </td>
		<td> <input type="number" name="price" value="<?php echo $row['harga'];?>"> </td>
	</tr>
	<tr>
		<td> <input type="submit" name="edit" value="Edit Data"></td>
	</tr>
	<?php
}
?>
	</form>
</table>
</body>
</html>
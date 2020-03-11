<html>
<head>
<body>
<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="tamu_db"; 

$conn = mysqli_connect($servername, $username,$password,$dbname);
$id_tamu	= $_POST['id_tamu'];
$nama		= $_POST['nama'];
$email		= $_POST['email'];
$isi		= $_POST['isi'];
if(!$conn) {
	die("Connection Failed : ".mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (id_bt,nama,email,isi) values  ('$id_tamu','$nama','$email','$isi')";

if (mysqli_query($conn, $sql)) {
	echo "New Record Created Successfully";
} else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>
	<br> <br>
		<a href="tugas_select.php">
			<input type="button" name="lihat_data" value="Lihat Data"></a>
</body>
</head>
</html>
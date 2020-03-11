<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="tamu_db"; 
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connecion Failed : ".mysql_connect_error());
}
$sql = "SELECT id_bt, nama, email, isi from buku_tamu";
$result = mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "ID TAMU : ".$row["id_bt"]."  |  NAMA : ".$row["nama"]."  |  EMAIL : ".$row["email"]."  |  ISI PESAN : ".$row["isi"]."<br>";
		}
	} else {
		echo "0 result";
	}
	mysqli_close($conn);
	?>
</body>
</html>
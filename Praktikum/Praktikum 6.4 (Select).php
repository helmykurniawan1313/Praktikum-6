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
$dbname ="myDB"; 
	
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connecion Failed : ".mysql_connect_error());
}
$sql = "SELECT kode, negara, champion from liga";
$result = mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "kode : ".$row["kode"]."-Negara : ".$row["negara"]."-Champion : ".$row["champion"]."<br>";
		}
	} else {
		echo "0 result";
	}
	mysqli_close($conn);
	?>
</body>
</html>
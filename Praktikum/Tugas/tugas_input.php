<html>
<head>
<title>Buku Tamu</title>
</head>
<body>
<form method="post" action="tugas_check.php" >
	<table width="500" align="center" cellpadding="5" cellspacing = "2">
		<tr>
			<td width="200"> ID Buku Tamu</td>
			<td><input type="number" name="id_tamu"></td>
		</tr>
		<tr>
			<td width="200">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="200">Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td width="200">Isi</td>
			<td><textarea name="isi" rows="5" cols="50"></textarea> </td>
		</tr>
		<tr>
			<td>
				<td>
				<input type="submit" name="btnLogin" value="Kirim">
				<input type="reset" name="reset" value="Reset">
				<a href="tugas_select.php">
			<input type="button" name="lihat_data" value="Lihat Data"></a>
			</td>
		</td>
		</tr>
	</table>
	</form>
</body>
</html>	
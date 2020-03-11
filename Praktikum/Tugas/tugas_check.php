<?php 
if (empty($_POST['nama'])) {
	header("Location:tugas_kosong.php");
}
elseif (empty($_POST['email'])) {
	header("Location:tugas_kosong.php");
	}
elseif (empty($_POST['isi'])) {
	header("Location:tugas_kosong.php");
	}
elseif (empty($_POST['id_tamu'])) {
	header("Location:tugas_kosong.php");
	}
else {
	include "tugas_insertinto.php";
}
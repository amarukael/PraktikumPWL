<?php 
// print_r($_POST)
if (!isset($_POST["nama"]) && !isset($_POST["nim"])) {
	die("here");
}else{
	if (preg_match("/[^A-Za-z'-]/", $_POST['nama'])) {
		die("nama harus huruf");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
</head>
<body>
	<h1>Selamat Datang Dashboard</h1>
	Nama	: <?= $_POST["nama"];?> <br>
	NIM		: <?= $_POST["nim"];?>
	

</body>
</html>
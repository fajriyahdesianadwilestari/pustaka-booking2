<!DOCTYPE html>
<html>
<head>
	<title>DATA KOMENTAR</title>
</head>
<body>
<?php
$nama=$_POST["nama"];
$jeniskelamin=$_POST["jeniskelamin"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$isikomentar=$_POST["komen"];
?>
<h1>DATA KOMENTAR</h1>
<br>
<br>
<hr>
Nama      : <?php echo $nama; ?> <br>
Jenis Kelamin     : <?php echo $jeniskelamin; ?> <br>
Email     : <?php echo $email; ?> <br>
Subject     : <?php echo $subject; ?> <br>
Isi Komentar     : <?php echo $isikomentar; ?> <br>
<a href="forminputkomentar.php">INPUT DATA LAGI </a>
</body>
</html>
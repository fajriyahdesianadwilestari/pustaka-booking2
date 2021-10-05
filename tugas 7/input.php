<!DOCTYPE html>
<html>
<head>
	<title>Input Nilai</title>
</head>
<body>
<h1>Rumus-Rumus</h1><br>
<form action="output.php" method="POST">
	<table border="1">
	<tr>
	<td>Nilai 1</td>
	<td><input type="text" name="nilai1"></td>
    </tr>
    <tr>
    <td>Nilai 2</td>
    <td><input type="text" name="nilai2"></td>
    </tr>
    <tr>
    <td align="center" colspan="2">
    <input type="radio" name="rumus" value="segitiga">segitiga<br>
    <input type="radio" name="rumus" value="persegi panjang">persegi panjang<br>
    </td>
    </tr>
    </table>
    <input type="submit" value="hitung"><input type="reset" value="batal">
</form>    	
</body>
</html>
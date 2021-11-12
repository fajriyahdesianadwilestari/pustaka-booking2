application/view/v_output.php) <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1.0">
	<title>Output </title>
</head>

<style>
	fieldset {
		width: 40%;
		margin: 20px auto;
		border-radius: 5px;
	}

select {
	width: 100%;
}
</style>

<body>
	<fieldset>
		<legend>Output Transaksi</legend>

			<table>
				<tr>
					<th>Nama Pembeli</th>
					<td>:</td>
					<td>
						<?= $nama; ?>
					</td>
				</tr>

				<tr>
					<th>Nomer HP</th>
					<td>:</td>
					<td>
						<?= $nhp; ?>
					</td>
				</tr>	

				<tr>
					<th>Merk Sepatu</th>
					<td>:</td>
					<td>
						<?= $merk; ?>
					</td>
				</tr>		

				<tr>
					<th>Ukuran Sepatu</th>
					<td>:</td>
					<td>
						<?= $ukuran; ?>
					</td>
				</tr>

				<tr>
					<th>Harga</th>
					<td>:</td>
					<td>
						<?= $harga; ?>
					</td>
				</tr>


				<tr>
					<td colspan="3" align="center">	
						<hr>
						<a href="<?= base_url('Sepatu');?>">Kembali</a>
					</td>	
				</tr>	

			</table>
	</fieldset>
</body>
</html>
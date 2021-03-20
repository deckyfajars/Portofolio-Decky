<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<title>Menitip Barang</title>
<!--<link href="style3.css" rel="stylesheet" type="text/css">-->
<link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">
</head>
<body class="body-custom">
	<center>
		<br><br><br><br><br><br>
	<h1>Ubah Titipan Barang </h1>
	<form action="" method="post">
		<input type="hidden" name="id_barang" value="<?php echo $barang_titip->id_barang ?>">
		<table border="0" width="120">
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $barang_titip->nama_barang ?>" placeholder="" name="nama_barang" ></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td>:</td>
			<td>
				<?php $id_jenis = $barang_titip->id_jenis; ?>
				<select id="drop" class="dropdown" class="masukan" name="id_jenis">
					<option <?php echo ($id_jenis == '2') ? "selected": "" ?> value="2" style="font-size:">Non-Elektronik</option>
					<option <?php echo ($id_jenis == '1') ? "selected": "" ?> value="1" style="font-size:">Elektronik</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Waktu penitipan</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $barang_titip->lama_waktu ?>" name="lama_waktu"></td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
	</table>

	<button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
	
   	</form>
   	
<br>
	<button class="btn btn-dark"><a href="../lihat">BACK</button>
	</center>
</body>
</html>
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
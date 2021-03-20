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
	<h1>Ubah Harga Barang </h1>
	<form action="" method="post">
		<input type="hidden" name="id_jenis" value="<?php echo $jenis->id_jenis ?>">
		<table border="0" width="120">
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $jenis->nama ?>" placeholder="" name="nama" readonly></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $jenis->harga ?>" name="harga" oninput="check(this)"></td>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
	</table>
	<br>
	<button type="submit" name="tambah" class="btn btn-primary">Ubah Data Harga</button>
	
   	</form>
   	
<br>
	<button class="btn btn-dark"><a href="<?= base_url(); ?>admin/lihatHarga">BACK</button>
	</center>
</body>
</html>
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

<script>
 function check(input) {
   if (input.value <= 0) {
     input.setCustomValidity('Angka tidak boleh kurang dari 0');
   } else {
     // input is fine -- reset the error message
     input.setCustomValidity('');
   }
 }
</script>
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
	<h1>Menitip Barang</h1>
	<form action="<?php echo base_url('pelanggan/tambah'); ?>" method="POST">
		<table border="0" width="120">
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" placeholder="Input Nama Barang" name="nama_barang" required="true" value="" size="17"></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td>:</td>
			<td>
				<select id="drop" class="dropdown" class="masukan" name="id_jenis" required="true" onchange="hitung_jumlah()" >
					<option value="">- Pilih Kategori  -</option>
					<option value="1" >Elektronik</option>
					<option value="2" >Non-Elektronik</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Waktu penitipan</td>
			<td>:</td>
			<td>
				<select name="lama_waktu" required="true" id="waktu" onchange="hitung_jumlah()">
						<option value="">- Lama Waktu  -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
			</td>
		</tr>
		<center>
		<tr>
			<td>				
					
					<input type="submit" class="btn btn-primary" value="Titip">
			</td>
		</tr>
		</center>
	</table>
	</form>
	<br>
	

	<br>
	<button class="btn btn-dark"><a href="index_home">BACK</button>
</body>
</html>

<script type="text/javascript">
		function hitung_jumlah() {
	
				var barang = parseInt(document.getElementById('drop').value) * parseInt(document.getElementById('waktu').value);
				var jumlah_harga = barang;
				document.getElementById('hitung_jumlah').value = jumlah_harga;
				
		
		}
		
		</script>


<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
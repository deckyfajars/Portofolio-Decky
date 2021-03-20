<!DOCTYPE html>
<html>
<head>
  <title>list barang</title>
  <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">
</head>
<body class="body-custom">
<body id="wrapper" style="background-color: #91EFFF;font-family:Arial;margin-left:auto;margin-right: auto;width: 50%;position: relative;left: 130px;border-radius: 10px; ">


<div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari barang ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<table border="1" style="text-align: center;position: relative;top: 0px;background-color: white" class="table mt-5">
  <thead>
  <tr>
    <th class="text-center" scope="col">Nama Barang</th>
    <th class="text-center" scope="col">Harga Barang /hari</th>
    <th class="text-center" scope="col">Lama Waktu</th>
    <th class="text-center" scope="col">Tanggal Titip</th>
    
  </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($barang_titip as $brg): ?>
        
        <td class="text-center"><?= $brg['nama_barang'] ?></td>
        <td class="text-center"><?= $brg['id_jenis'] ?></td>
        <td class="text-center"><?= $brg['lama_waktu'] ?></td>
        <td class="text-center"><?= $brg['tgl_titip'] ?></td>
        
        
    </tr>
    <?php endforeach ?>
   
  </tbody>  
</table>
<br>
<button class="btn btn-dark" name="back" value="back" style="position: relative;top: 5px;font-family: Tahoma;"><a href="index_home") ?>Back</button>

<!--<script>
  function pindah() {
    window.location.replace("menu.php");
  }
</script>-->

    <p style="text-align:right; color:black;">Rp.15.000 = ELEKTRONIK</p>
    <p style="text-align:right; color:black;">Rp.10.000 = NON-ELEKTRONIK</p>
</body>
</body>
</html>
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
  <title>list barang</title>
  <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">
</head>
<body class="body-custom">
<body id="wrapper" style="background-color: #91EFFF;font-family:Arial;margin-left:auto;margin-right: auto;width: 50%;position: relative;left: 130px;border-radius: 10px; ">

<table border="1" style="text-align: center;position: relative;top: 0px;background-color: white" class="table mt-5">
  <thead>
  <tr>
    <th class="text-center" scope="col">Id Jenis</th>
    <th class="text-center" scope="col">Nama Barang</th>
    <th class="text-center" scope="col">Harga Barang /hari</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($jenis as $jns): ?>
        <td class="text-center"><?= $jns['id_jenis'] ?></td>
        <td class="text-center"><?= $jns['nama'] ?></td>
        <td class="text-center"><?= $jns['harga'] ?></td>
       
          
        <td class="text-center">
          <a href="<?= base_url(); ?>admin/ubah2/<?= $jns['id_jenis'] ?>" class="badge badge-info float-center" ?>Ubah</a>
        </td>
    </tr>
    <?php endforeach ?>
   


  </tbody>  
</table>
<button class="btn btn-dark" name="back" value="back" style="position: relative;top: 5px;font-family: Tahoma;"><a href="lihat") ?>Back</button>
</body>
</body>
</html>
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

<?php
 
 header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
 
 header("Content-Disposition: attachment; filename=$title.xls");

 header('Cache-Control: max-age=0');

 header('Cache-Control: max-age=1');
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
      <h1 style="text-align: center;">DATA SCRAP CABLE</h1>
      <br>
      <thead>
 
           <tr>
 
                <th>STO</th>
                <th>PRIMER</th>
                <th>KAPASITAS (PAIR)</th>
                <th>DIAMETER (MM)</th>
                <th>PANJANG (MTR)</th>
                <th>KURS DOLLAR</th>
                <th>LME (1 Pound)</th>
                <th>POTENSI (KG)</th>
                <th>KEUNTUNGAN (Milyar)</th>
                <th>TANGGAL</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php foreach($hasil2 as $row) { ?>
 
           <tr>
 
                <td><?php echo $row['tempat'];?></td>
                <td><?php echo $row['primer'];?></td>
                <td><?php echo $row['kapasitas'];?></td>
                <td><?php echo $row['diameter'];?></td>
                <td><?php echo $row['panjang'];?></td>
                <td><?php echo $row['USD'];?></td>
                <td><?php echo $row['LME'];?></td>
                <td><?php echo $row['berat'];?></td>
                <td><?php echo $row['profit'];?></td>
                <td><?php echo $row['tanggal'];?></td>
 
           </tr>
 
           <?php } ?>
 
      </tbody>
 
 </table>
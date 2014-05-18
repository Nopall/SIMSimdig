<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO dpl_simdig (`No`, `tmp_pelatihan`, `cpd`, `no_hp`, `tgl_pelatihan`, `kor_pelatihan`, `lap_training`, `link`) 
VALUES (NULL, '$_POST[tmp]', '$_POST[cpd]', '$_POST[hp]', '$_POST[tgl_pel]', '$_POST[kor]', '$_POST[lap]', '$_POST[link]');";
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_laporan.php>back</a>"; 

?>
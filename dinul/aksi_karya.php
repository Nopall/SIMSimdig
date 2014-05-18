<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO hasil_karya (`No`, `nama`, `instansi`, `video`, `kode_kelas`, `jdl_video`, `jdl_simulasivisual`, `jdl_bkdigital`)
 VALUES (NULL, '$_POST[nm]', '$_POST[instansi]', '$_POST[video]', '$_POST[kd]', '$_POST[jdl_video]', '$_POST[jdl_sv]', '$_POST[jdl_bk]');";
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_karya.php>back</a>"; 

?>
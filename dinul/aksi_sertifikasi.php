<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO ups_simdig (`No`, `tmp_pelatiahan`, `cpd`, `no_hp`, `tgl_pelatihan`, `kor_pelatihan`, `tgl_ujian`, `tgl_remidi`, `tgl_penhasilkar`) 
VALUES (NULL, '$_POST[tmp]', '$_POST[cpd]', '$_POST[hp]', '$_POST[tgl_pel]', '$_POST[kor]', '$_POST[tgl_ujian]', '$_POST[tgl_re]', '$_POST[tgl_karya]');";
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_sertifikasi.php>back</a>"; 

?>
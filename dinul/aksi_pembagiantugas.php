<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO pmbg_instruktur (Nama, Fungsi, Tgs_administratif, Tgs_materi) VALUES ('$_POST[nm]', '$_POST[fungsi]', '$_POST[tgs]', '$_POST[materi]');";
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_pembagiantugas.php>back</a>"; 

?>
<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO ev_instruktur (`No`, `Aspek`, `Nilai`) VALUES (NULL, '$_POST[aspek]', '$_POST[nilai]');";
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_evaluasi.php>back</a>"; 

?>
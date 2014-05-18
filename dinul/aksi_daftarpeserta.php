<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO dft_pesertapel (`nm_Lengkap`, `jns_kelamin`, `kewarganegaraan`, `tgl`, `tempat`, `asl_institusi`, `jabatan`, `no_hp`, `email`) 
VALUES ('$_POST[nm]', '$_POST[kelamin]', '$_POST[warganegara]', '$_POST[tgl]', '$_POST[tmp]', '$_POST[asal]', '$_POST[jabatan]', '$_POST[hp]', '$_POST[email]');";
mysql_query($simpan); 
 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_daftarpeserta.php>back</a>"; 

?>
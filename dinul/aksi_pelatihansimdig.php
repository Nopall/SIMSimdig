<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("simsimdig"); 


$simpan = "INSERT INTO frm_plthn (`Tempat`, `Daerah`, `Provinsi`, `Tanggal`, `Nama_CPD`, `HP_PIC`, `Jml_Peserta`, `Kor_pelatihan`, `Staff1`, `Staff2`, `Mhs`, `Ket`) VALUES 
		('$_POST[tmp]', '$_POST[daerah]', '$_POST[prov]', '$_POST[tgl]', '$_POST[nm_cpd]', '$_POST[hp]', '$_POST[jml]', '$_POST[kor]', '$_POST[stf1]', '$_POST[stf2]', '$_POST[mhs]','$_POST[ket]');";
mysql_query($simpan);
 

 echo "data berhasil disimpan "; 
 echo "<br>"; 
 echo "<a href=frm_pelatihansimdig.php>back</a>"; 

?>
<html>
<head><title></title>
<link href="Bootstrap 3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui-1.10.4/development-bundle/themes/ui-lightness/jquery-ui.css">
  <script src="jquery-ui-1.10.4/js/jquery-1.10.2.js"></script>
  <script src="jquery-ui-1.10.4/development-bundle/ui/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<body>
<form name="form1" method="post" action="aksi_pelatihansimdig.php" class="panel panel-default"> 
  <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#00FF00" bgcolor="#33CC00" class="table table-bordered"> 
    <tr bgcolor="#CCFFCC"> 
      <td height="50" colspan="2"><div align="center">INPUT DATA PELATIHAN SIMDIG </div></td> 
    </tr>  
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">TEMPAT </td> 
      <td>: 
      <input name="tmp" type="text" id="tmp"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">DAERAH</td> 
      <td>: 
      <input name="daerah" type="text" id="daerah"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">PROVINSI</td> 
      <td>: 
          <input name="prov" type="text" id="prov"></td></td> 
    </tr> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">TANGGAL</td> 
      <td>: <input type="text" id="datepicker" name="tgl"></td> 
    </tr> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">NAMA CPD</td> 
      <td>: 
      <input name="nm_cpd" type="text" id="nm_cpd"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">HP PIC</td> 
      <td>: 
      <input name="hp" type="text" id="hp"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">JUMLAH PESERTA</td> 
      <td>: 
      <input name="jml" type="text" id="jml"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">KOOORDINATOR PELATIHAN</td> 
      <td>: 
      <input name="kor" type="text" id="kor"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">STAFF 1</td> 
      <td>: 
      <input name="stf1" type="text" id="stf1"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">STAFF 2</td> 
      <td>: 
      <input name="stf2" type="text" id="stf2"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">MAHASISWA</td> 
      <td>: 
      <input name="mhs" type="text" id="mhs"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">KETERANGAN</td> 
      <td>: 
      <input name="ket" type="text" id="ket"></td> 
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td>&nbsp;</td> 
      <td height="50"><input type="submit" name="Submit" value="Simpan"></td> 
    </tr> 
  </table> 
</form>
 <script src="Bootstrap 3/dist/js/bootstrap.min.js"></script>
 </body>
</html>
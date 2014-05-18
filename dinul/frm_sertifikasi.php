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
<form name="form1" method="post" action="aksi_serifikasi.php" class="panel panel-default"> 
  <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#00FF00" bgcolor="#33CC00" class="table table-bordered"> 
    <tr bgcolor="#CCFFCC"> 
      <td height="50" colspan="2"><div align="center">INPUT DATA PELAKSANAAN SERTIFIKASI </div></td> 
    </tr> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">TEMPAT PELATIHAN</td> 
      <td>: 
      <input name="tmp" type="text" id="tmp"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">CPD</td> 
      <td>: 
      <input name="cpd" type="text" id="cpd"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">NO HP</td> 
      <td>: 
          <input name="hp" type="text" id="hp"></td></td> 
    </tr> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">TANGGAL PELATIHAN</td> 
      <td>: 
      <input name="tgl_pel" type="text" id="datepicker"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">KOORDINATOR PELATIHAN</td> 
      <td>: 
      <input name="kor" type="text" id="kor"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">TANGGAL UJIAN DARING</td> 
      <td>: 
      <input name="tgl_ujian" type="text" id="datepicker"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">TANGGAL REMIDI</td> 
      <td>: 
      <input name="tgl_re" type="text" id="datepicker"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">TANGGAL PENERIMAAN HASIL KARYA</td> 
      <td>: 
      <input name="tgl_karya" type="text" id="datepicker"></td> 
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
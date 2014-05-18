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
<form name="form1" method="post" action="aksi_daftarpeserta.php" class="panel panel-default"> 
  <table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#00FF00" bgcolor="#33CC00" class="table table-bordered"> 
    <tr bgcolor="#CCFFCC"> 
      <td height="50" colspan="2"><div align="center">INPUT DATA PESERTA SIMDIG </div></td> 
    </tr>  
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">NAMA LENGKAP </td> 
      <td>: 
      <input name="nm" type="text" id="nm"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">JENIS KELAMIN</td> 
      <td>: 
      <input name="kelamin" type="text" id="kelamin"></td> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">KEWARGANEGARAAN</td> 
      <td>: 
          <input name="warganegara" type="text" id="warganegara"></td></td> 
    </tr> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">TEMPAT LAHIR</td> 
      <td>: 
      <input name="tmp" type="text" id="tmp"></td> 
    </tr> 
    </tr> 
    <tr bgcolor="#FFFFFF"> 
      <td height="40">TANGGAL LAHIR</td> 
      <td>: 
      <input name="tgl" type="text" id="datepicker"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">ASAL INSTITUSI</td> 
      <td>: 
      <input name="asal" type="text" id="asal"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">JABATAN DALAM INSTITUSI</td> 
      <td>: 
      <input name="jabatan" type="text" id="jabatan"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">NO HP</td> 
      <td>: 
      <input name="hp" type="text" id="hp"></td> 
    </tr>
	<tr bgcolor="#FFFFFF"> 
      <td height="40">EMAIL</td> 
      <td>: 
      <input name="email" type="text" id="email"></td> 
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
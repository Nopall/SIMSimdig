<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form input peserta</h1>
</div>
<?php echo form_open('proses/inputpeserta');?>
  <div class="form-group">
    <label for="inpNamaLengkap">Nama Lengkap:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpNamaLengkap','name' => 'namalengkap','value' => ((isset($peserta->fullname) ? $peserta->fullname : ""))));?>
  </div>
  <div class="form-group">
    <label for="inpJK">Jenis Kelamin:</label>
    <?php
    	$options = array('co' => 'Laki-laki', 'ce' => 'Perempuan');

    	echo form_dropdown('jk',$options,'co','class="form-control"');
    ?>
  </div>
  <div class="form-group">
    <label for="inpKewarneg">Kewarganegaraan:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpKewarneg','name' => 'warganegara','value' => ((isset($peserta->warganegara) ? $peserta->warganegara : ""))));?>
  </div>
  <div class="form-group">
    <label for="inpTemplahir">Tempat Lahir:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTemplahir','name' => 'templahir','value' => ((isset($peserta->templahir) ? $peserta->templahir : ""))));?>
  </div>
  <div class="form-group">
    <label for="inpTgllahir">Tanggal Lahir:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTgllahir','name' => 'tgllahir','value' => ((isset($peserta->tglahir) ? $peserta->tglahir : ""))));?>
  </div>
  <div class="form-group">
    <label for="inpAslinstitut">Asal Institusi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpAslinstitut','name' => 'aslinstitut','value' => ((isset($peserta->asli) ? $peserta->asli : ""))));?>
  </div>
  <div class="form-group">
    <label for="jbtnInstitut">Jabatan Dalam Institusi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'jbtnInstitut','name' => 'jbtninstitut','value' => ((isset($peserta->jabatan) ? $peserta->jabatan : ""))));?>
  </div>
  <div class="form-group">
    <label for="inpHP">Nomor Handphone:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpHP','name' => 'nohp','value' => ((isset($peserta->no_hp) ? $peserta->no_hp : ""))));?>
  </div>
  <div class="form-group">
    <label for="inpEmail">Email:</label>
    <?php echo form_input(array('type' => 'email','class' => 'form-control', 'id' => 'inpEmail','name' => 'email','value' => ((isset($peserta->email) ? $peserta->email : ""))));?>
  </div>
  <?php echo form_submit(array('class' => 'btn btn-default btn-primary','value' => 'Submit'));?>
<?php echo form_close();?>
</div>
</div>
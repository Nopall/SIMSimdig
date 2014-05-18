<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form input peserta</h1>
</div>
<?php echo form_open('proses/daftarpeserta');?>
  <div class="form-group">
    <label for="inpNamaLengkap">Nama Lengkap:</label>
    <?php echo form_input(array('type' => 'email','class' => 'form-control', 'id' => 'inpNamaLengkap','name' => 'namalengkap'));?>
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
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpKewarneg','name' => 'warganegara'));?>
  </div>
  <div class="form-group">
    <label for="inpTemplahir">Tempat Lahir:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTemplahir','name' => 'templahir'));?>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
<?php echo form_close();?>
</div>
</div>
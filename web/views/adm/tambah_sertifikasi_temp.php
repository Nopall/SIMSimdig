<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form input Pelaksanaan Sertifikasi</h1>
</div>
<?php echo form_open('proses/inputsertifikasi');?>
  <div class="form-group">
    <label for="inpTmpLatihan">Tempat Pelatihan:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpTmpLatihan','name' => 'tmplatihan'));?>
  </div>
  <div class="form-group">
    <label for="inpCpd">CPD:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpCpd','name' => 'cpd'));?>
  </div>
  <div class="form-group">
    <label for="inpHp">NO Handphone:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpHp','name' => 'nohp'));?>
  </div>
  <div class="form-group">
    <label for="inpTgllahir">Tanggal Pelatihan:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTgllahir','name' => 'tglpelatihan'));?>
  </div>
  <div class="form-group">
    <label for="krPelatihan">Koordinator Pelatihan:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'krPelatihan','name' => 'krpelatihan'));?>
  </div>
  <div class="form-group">
    <label for="tglUD">Tanggal Ujian Daring:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'tglUD','name' => 'tglud'));?>
  </div>
  <div class="form-group">
    <label for="tglRemidi">Tanggal Remidi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'tglRemidi','name' => 'tglremidi'));?>
  </div>
  <div class="form-group">
    <label for="tglPHK">Tanggal Penerimaan Hasil Karya:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'tglPHK','name' => 'tglphk'));?>
  </div>
  <?php echo form_submit(array('class' => 'btn btn-default btn-primary','value' => 'Submit'));?>
<?php echo form_close();?>
</div>
</div>
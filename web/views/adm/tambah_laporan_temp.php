<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form Input Laporan</h1>
</div>
<?php echo form_open('proses/inputlaporan');?>
  <div class="form-group">
    <label for="inpTP">Tempat Pelatihan:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpTP','name' => 'tempatlatihan'));?>
  </div>
  <div class="form-group">
    <label for="inpCPD">CPD:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpCPD','name' => 'cpd'));?>
  </div>
  <div class="form-group">
    <label for="inpHP">No Handphone:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpHP','name' => 'nohp'));?>
  </div>
  <div class="form-group">
    <label for="tgllatihan">Tanggal Pelatihan:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'tgllatihan','name' => 'tgllatihan'));?>
  </div>
  <div class="form-group">
    <label for="inpKP">Koordinator Pelatihan:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpKP','name' => 'koorlatihan'));?>
  </div>
  <div class="form-group">
    <label for="inpLT">Laporan Training:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpLT','name' => 'laporantraining'));?>
  </div>
  <div class="form-group">
    <label for="inpLinkWeb">Link Website:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpLinkWeb','name' => 'linkweb'));?>
  </div>
  <?php echo form_submit(array('class' => 'btn btn-default btn-primary','value' => 'Submit'));?>
<?php echo form_close();?>
</div>
</div>
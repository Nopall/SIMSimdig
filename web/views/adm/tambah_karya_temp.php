<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form input Karya</h1>
</div>
<?php echo form_open('proses/inputkarya');?>
  <div class="form-group">
    <label for="inpNama">Nama:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpNama','name' => 'nama'));?>
  </div>
  <div class="form-group">
    <label for="inpInstansi">Instansi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpInstansi','name' => 'instansi'));?>
  </div>
  <div class="form-group">
    <label for="inpVideokomdar">Video Komdar:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpVideokomdar','name' => 'videokomdar'));?>
  </div>
  <div class="form-group">
    <label for="inpKKS">Kode Kelas Simdig:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpKKS','name' => 'kks'));?>
  </div>
  <div class="form-group">
    <label for="jdlVideoPresentasi">Judul Video Presentasi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'jdlVideoPresentasi','name' => 'jdlvideopresentasi'));?>
  </div>
  <div class="form-group">
    <label for="jdlSimulasiVisual">Judul Simulasi Visual:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'jdlSimulasiVisual','name' => 'jdlsimulasivisual'));?>
  </div>
  <div class="form-group">
    <label for="jdlBukudigital">Judul Buku Digital:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'jdlBukudigital','name' => 'jdlbukudigital'));?>
  </div>
  <?php echo form_submit(array('class' => 'btn btn-default btn-primary','value' => 'Submit'));?>
<?php echo form_close();?>
</div>
</div>
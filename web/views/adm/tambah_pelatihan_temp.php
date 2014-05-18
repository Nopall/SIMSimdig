<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form input Pelatihan Simdig</h1>
</div>
<?php echo form_open('proses/inputpelatihan');?>
  <div class="form-group">
    <label for="inpTempat">Tempat:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpTempat','name' => 'tempat'));?>
  </div>
  <div class="form-group">
    <label for="inpDaerah">Daerah:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpTempat','name' => 'daerah'));?>
  </div>
  <div class="form-group">
    <label for="inpProv">Provinsi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpProv','name' => 'provinsi'));?>
  </div>
  <div class="form-group">
    <label for="inpTgllahir">Tanggal:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTgllahir','name' => 'tanggal'));?>
  </div>
  <div class="form-group">
    <label for="inpNCPD">Nama CPD:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpNCPD','name' => 'namacpd'));?>
  </div>
  <div class="form-group">
    <label for="inpHPIC">HP Pic:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpHPIC','name' => 'hppic'));?>
  </div>
  <div class="form-group">
    <label for="inpJmlpeserta">Jumlah Peserta:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpJmlpeserta','name' => 'jml_peserta'));?>
  </div>
  <div class="form-group">
    <label for="inpKP">Koordinator Pelatihan:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpKP','name' => 'koorpelatihan'));?>
  </div>
  <div class="form-group">
    <label for="inpStaff1">Staff 1:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpStaff1','name' => 'staff1'));?>
  </div>
  <div class="form-group">
    <label for="inpStaff2">Staff 2:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpStaff2','name' => 'staff2'));?>
  </div>
  <div class="form-group">
    <label for="inpMahasiswa">Mahasiswa:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpMahasiswa','name' => 'mahasiswa'));?>
  </div>
  <div class="form-group">
    <label for="inpKet">Keterangan:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpKet','name' => 'keterangan'));?>
  </div>
  <?php echo form_submit(array('class' => 'btn btn-default btn-primary','value' => 'Submit'));?>
<?php echo form_close();?>
</div>
</div>
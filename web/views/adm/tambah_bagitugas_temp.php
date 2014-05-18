<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
	<h1>Form input Pembagian Tugas</h1>
</div>
<?php echo form_open('proses/inputbagitugas');?>
  <div class="form-group">
    <label for="inpNama">Nama:</label>
    <?php echo form_input(array('type' => 'text','class' => 'form-control', 'id' => 'inpNama','name' => 'nama'));?>
  </div>
  <div class="form-group">
    <label for="inpFungsi">Fungsi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpFungsi','name' => 'fungsi'));?>
  </div>
  <div class="form-group">
    <label for="inpTA">Tugas Administratif:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTA','name' => 'tgsadmin'));?>
  </div>
  <div class="form-group">
    <label for="inpTM">Tugas Materi:</label>
    <?php echo form_input(array('class' => 'form-control', 'id' => 'inpTM','name' => 'tgsmateri'));?>
  </div>
  <?php echo form_submit(array('class' => 'btn btn-default btn-primary','value' => 'Submit'));?>
<?php echo form_close();?>
</div>
</div>
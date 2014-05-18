
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
  <h1>List Sertifikasi <?php echo anchor('adminsimdig/tambah_sertifikasi','Tambah Sertifikasi',array('class' => 'pull-right btn btn-primary'));?></h1>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Tempat Pelatihan</th>
          <th>CPD</th>
          <th>No Handphone</th>
          <th>Tanggal Pelatihan</th>
          <th>Koordinator Pelatihan</th>
          <th colspan = "2">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; foreach($query as $row){?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row->tempat;?></td>
          <td><?php echo $row->cpd;?></td>
          <td><?php echo $row->no_hp;?></td>
          <td><?php echo $row->tgl_latihan;?></td>
          <td><?php echo $row->koor_latihan;?></td>
          <td><?php echo anchor('adminsimdig/tambah_karya/'.$row->id,'Edit',array('class' => 'btn btn-success btn-xs')); ?></td>
          <td><?php echo anchor('proses/deletekarya/'.$row->id,'Delete',array('class' => 'btn btn-danger btn-xs')); ?></td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
</div>
</div>
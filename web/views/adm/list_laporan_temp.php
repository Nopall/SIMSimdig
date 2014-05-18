
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
  <h1>List Laporan <?php echo anchor('adminsimdig/tambah_laporan','Tambah Laporan',array('class' => 'pull-right btn btn-primary'));?></h1>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Tempat</th>
          <th>CPD</th>
          <th>Koordinator</th>
          <th>Tanggal Pelatihan</th>
          <th colspan = "2">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; foreach($query as $row){?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row->tempat;?></td>
          <td><?php echo $row->cpd;?></td>
          <td><?php echo $row->koor_pelatihan;?></td>
          <td><?php echo $row->tgl_pelatihan;?></td>
          <td><?php echo anchor('adminsimdig/tambah_laporan/'.$row->id,'Edit',array('class' => 'btn btn-success btn-xs')); ?></td>
          <td><?php echo anchor('proses/deletelaporan/'.$row->id,'Delete',array('class' => 'btn btn-danger btn-xs')); ?></td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
</div>
</div>
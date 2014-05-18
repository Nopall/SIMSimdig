
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
  <h1>List Pelatihan <?php echo anchor('adminsimdig/tambah_pelatihan','Tambah Pelatihan',array('class' => 'pull-right btn btn-primary'));?></h1>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Tempat</th>
          <th>Daerah</th>
          <th>CPD</th>
          <th>Jumlah Peserta</th>
          <th>Tanggal Pelatihan</th>
          <th colspan = "2">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; foreach($query as $row){?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row->tempat;?></td>
          <td><?php echo $row->daerah;?></td>
          <td><?php echo $row->cpd;?></td>
          <td><?php echo $row->jml_peserta;?></td>
          <td><?php echo $row->tanggal;?></td>
          <td><?php echo anchor('adminsimdig/tambah_pelatihan/'.$row->id,'Edit',array('class' => 'btn btn-success btn-xs')); ?></td>
          <td><?php echo anchor('proses/deletepelatihan/'.$row->id,'Delete',array('class' => 'btn btn-danger btn-xs')); ?></td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
</div>
</div>
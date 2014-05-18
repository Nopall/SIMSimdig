
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
  <h1>List Karya <?php echo anchor('adminsimdig/tambah_karya','Tambah Hasil Karya',array('class' => 'pull-right btn btn-primary'));?></h1>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Lengkap</th>
          <th>Instansi</th>
          <th>Video Komdar</th>
          <th>Kode Kelas</th>
          <th colspan = "2">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; foreach($query as $row){?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row->nama;?></td>
          <td><?php echo $row->instansi;?></td>
          <td><?php echo $row->video;?></td>
          <td><?php echo $row->kodekelas;?></td>
          <td><?php echo anchor('adminsimdig/tambah_karya/'.$row->id,'Edit',array('class' => 'btn btn-success btn-xs')); ?></td>
          <td><?php echo anchor('proses/deletekarya/'.$row->id,'Delete',array('class' => 'btn btn-danger btn-xs')); ?></td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
</div>
</div>
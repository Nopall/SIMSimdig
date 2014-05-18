
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
  <h1>List Peserta <?php echo anchor('adminsimdig/tambah_peserta','Tambah Peserta',array('class' => 'pull-right btn btn-primary'));?></h1>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Lengkap</th>
          <th>Asal Institusi</th>
          <th>Jawaban Institusi</th>
          <th>Email</th>
          <th colspan = "2">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; foreach($query as $peserta){?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $peserta->fullname;?></td>
          <td><?php echo $peserta->asal;?></td>
          <td><?php echo $peserta->jabatan;?></td>
          <td><?php echo $peserta->email;?></td>
          <td><?php echo anchor('adminsimdig/tambah_peserta/'.$peserta->id,'Edit',array('class' => 'btn btn-success btn-xs')); ?></td>
          <td><?php echo anchor('proses/deletepeserta/'.$peserta->id,'Delete',array('class' => 'btn btn-danger btn-xs')); ?></td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
</div>
</div>
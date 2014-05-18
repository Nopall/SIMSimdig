
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div class="page-header">
  <h1>List Pembagian Tugas <?php echo anchor('adminsimdig/tambah_bagitugas','Tambah Pembagian Tugas',array('class' => 'pull-right btn btn-primary'));?></h1>
</div>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Fungsi  </th>
          <th colspan = "2">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $no = 1; foreach($query as $row){?>
        <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $row->nama;?></td>
          <td><?php echo $row->fungsi;?></td>
          <td><?php echo anchor('adminsimdig/tambah_bagitugas/'.$row->id,'Edit',array('class' => 'btn btn-success btn-xs')); ?></td>
          <td><?php echo anchor('proses/deletebagitugas/'.$row->id,'Delete',array('class' => 'btn btn-danger btn-xs')); ?></td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
</div>
</div>
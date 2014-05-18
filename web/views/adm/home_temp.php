<div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="page-header">
            <h1>Dashboard Admin</h1>
          </div>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Site Setting</h4>
              <span class="text-muted">Manage Site Setting</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>User Setting</h4>
              <span class="text-muted">Manage User Setting</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Module</h4>
              <span class="text-muted">Manage Module</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Logout</h4>
              <span class="text-muted">Do you want to Logout ?</span>
            </div>
          </div>

          <h2 class="sub-header">Daftar Peserta</h2>
          <div class="table-responsive">
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
      </div>
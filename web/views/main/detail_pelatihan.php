<div class="row">
    <div class="col-md-8">
	    <!-- Nav tabs -->
			<ul class="nav nav-tabs">
			  <li class="active"><a href="#peserta" data-toggle="tab">Peserta</a></li>
			  <li><a href="#laporan" data-toggle="tab">Laporan</a></li>
			  <li><a href="#sertifikasi" data-toggle="tab">Sertifikasi</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
			  <div class="tab-pane active" id="peserta">
			  	<table class="table table-striped">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Nama Lengkap</th>
			          <th>Asal Institusi</th>
			          <th>Jawaban Institusi</th>
			          <th>Email</th>
			          <th>Action</th>
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
			          <td><?php echo anchor('adminsimdig/tambah_peserta/'.$peserta->id,'Lihat Karya',array('class' => 'btn btn-success btn-xs')); ?></td>
			        <?php $no++; } ?>
			      </tbody>
			    </table>
			  </div>
			  <div class="tab-pane" id="laporan">...</div>
			  <div class="tab-pane" id="sertifikasi">...</div>
			</div>
    </div>
</div>
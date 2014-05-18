<div class="row">
    <div class="col-md-8">
	    <?php foreach($query as $row){?>
	       	<div class="page-header">
	       		<h1><?php echo $row->tempat." -"." ".$row->tanggal;?></h1>
	       	</div>
	       	<p><?php echo strip_tags($row->keterangan);?></p>
	       	<div class="pull-right">
	       	<?php echo anchor('web/detail/pelatihan/'.$row->id,'More Detail',array('class' => 'btn btn-primary')); ?></td>
	       	</div>
	    <?php }?>
    </div>
</div>
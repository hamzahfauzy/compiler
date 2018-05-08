<div class="container">
	<div class="panel">
		<div class="panel-body">
			<h2>Bahasa Pemrograman</h2>
			<button class="btn btn-primary" onclick="location='<?=URL;?>/bahasa/tambah'"><i class="fa fa-plus"></i> Tambah Data</button>
			<table class="table table-bordered">
				<tr>
					<td>No</td>
					<td>Nama Bahasa</td>
					<td>Extension</td>
					<td>Environment</td>
					<td>Aksi</td>
				</tr>
				<?php 
				if($model->length){
				$no=1; foreach($model->data as $value){ ?>
				<tr>
					<td><?=$no;$no++; ?></td>
					<td><?=$value['nama_bahasa'];?></td>
					<td><?=$value['extension'];?></td>
					<td><?=$value['path_environment'];?></td>
					<td>
						<button class="btn btn-warning" onclick="location='<?=URL;?>/bahasa/edit&id=<?=$value['bahasaID'];?>'"><i class="fa fa-pencil"></i> Edit</button>
						<button class="btn btn-danger" onclick="location='<?=URL;?>/bahasa/hapus&id=<?=$value['bahasaID'];?>'"><i class="fa fa-close"></i> Hapus</button>
					</td>
				</tr>
				<?php }}else{ ?>
				<tr>
					<td colspan="5"><center>Tidak Ada Data!</center></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
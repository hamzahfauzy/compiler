<div class="container">
	<div class="panel">
		<div class="panel-body">
			<h2>Form Bahasa</h2>
			<form method="post">
				<input type="hidden" name="bahasaID" value="<?=@$model->bahasaID;?>">
				Nama Bahasa :
				<input type="text" name="nama_bahasa" value="<?=@$model->nama_bahasa;?>" class="form-control" required>
				Extension :
				<input type="text" name="extension" value="<?=@$model->extension;?>" class="form-control" required>
				Path Environment :
				<input type="text" name="path_environment" value="<?=@$model->path_environment;?>" class="form-control" required>
				Compile Method :
				<input type="text" name="compile_method" value="<?=@$model->compile_method;?>" class="form-control" required>
				Run Method :
				<input type="text" name="run_method" value="<?=@$model->run_method;?>" class="form-control" required>
				<button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
				<button class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</button>
			</form>
		</div>
	</div>
</div>
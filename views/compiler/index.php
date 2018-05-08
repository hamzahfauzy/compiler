<div class="container">
	<div class="panel">
		<div class="panel-body">
			<h2>Compiler Test</h2>
			<form method="post">
				<span>File Name :</span>
				<input type="text" name="filename" class="form-control">
				<div class="row">
					<div class="col-sm-6">
						<span>Code :</span>
						<textarea rows="10" name="kode" class="form-control"></textarea>
					</div>
					<div class="col-sm-6">
						<span>Input :</span>
						<textarea rows="10" name="test_input" class="form-control"></textarea>
					</div>
				</div>
				<span>Language</span>
				<select name="bahasa" class="form-control" id="bahasa">
					<option>Choose</option>
					<?php foreach ($model->data as $value) { ?>
					<option value="<?=$value['bahasaID'];?>"><?=$value['nama_bahasa'];?></option>
					<?php } ?>
				</select>
				<br>
				<button class="btn btn-primary">Run Code</button>
			</form>
		</div>
	</div>
</div>
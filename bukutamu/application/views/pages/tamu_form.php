<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
?> 
<div class="card card-default" style="border-radius: 0px; margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Tamu</div>
	<div class="card-body">
		<?php echo anchor ('tamu','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 

		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="simpan">
					<div class="form-group"> 
						<label>No</label>
						<input type="text" name="no_id"  
						class="form-control" placeholder=".."> 
						
					</div>
				<form method="post" action="simpan">
					<div class="form-group"> 
						<label>Nama</label>
						<input type="text" name="nama_tamu"
						class="form-control" placeholder=".."> 
						
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat_tamu"
						class="form-control" placeholder="...">
					</div>

					<div class="form-group"> 
						<label>Kantor</label>
						<input type="text" name="kantor_tamu"
						class="form-control" placeholder="..."> 
					</div>

				

					<div class="form-group">
						<label>Jabatan</label>
						<input type="text" name="jabatan_tamu"
						class="form-control" placeholder="...">
					</div>

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>
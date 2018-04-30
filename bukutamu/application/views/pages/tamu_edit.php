<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
	if($query->num_rows() == 0 ) redirect('tamu');
	$r = $query->result()[0];
?> 
<div class="card card-default" style="border-radius: 0px;  margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Tamu</div>
	<div class="card-body">
		<?php echo anchor ('tamu','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 
		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="../update/<?php echo $r->id_tamu; ?>">
					<div class="form-group"> 
						<label>no</label>
						<input type="text" name="no_id" value="<?php echo $r->no_id; ?>" 
						class="form-control" placeholder=".."> 
						
					</div>
					<div class="form-group"> 
						<label>nama</label>
						<input type="text" name="nama_tamu" value="<?php echo $r->nama_tamu; ?>" 
						class="form-control" placeholder=".."> 
						
					</div>

					<div class="form-group">
						<label>alamat</label>
						<input type="text" name="alamat_tamu"  value="<?php echo $r->alamat_tamu; ?>"
						class="form-control" placeholder="...">
					</div>

					<div class="form-group"> 
						<label>kantor</label>
						<input type="text" name="kantor_tamu" value="<?php echo $r->kantor_tamu; ?>"
						class="form-control" placeholder="..."> 
					</div>

					
					<div class="form-group">
						<label>jabatan</label>
						<input type="text" name="jabatan_tamu"  value="<?php echo $r->jabatan_tamu; ?>"
						class="form-control" placeholder="...">
					</div>


					
							?>
					
					</div>

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>	
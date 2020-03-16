<div class="container">
	<div class="row mt-3">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					Ubah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="<?= base_url();?>mahasiswa/ubah" method="post">
						<div class="form-group">
					   		 <label for="nama">Nama</label>
					   		 <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa..." value="<?= $mahasiswa['nama']; ?>">
					   		 <small class="form-text text-danger">
					   		 	<?= form_error('nama');?>
					   		 		
					   		 	</small>
				  		</div>
				  		<div class="form-group">
					   		 <label for="nrp">NRP</label>
					   		 <input type="text" name="nrp" class="form-control" id="nrp" placeholder="Masukkan NRP Mahasiswa..." value="<?= $mahasiswa['nrp']; ?>">
					   		 <small class="form-text text-danger"><?= form_error('nrp');?></small>
				  		</div>
				  		<div class="form-group">
					   		 <label for="email">Email</label>
					   		 <input type="text" name="email" class="form-control" id="email" placeholder="email@example.com" value="<?= $mahasiswa['email']; ?>">
					   		 <small class="form-text text-danger"><?= form_error('email');?></small>
				  		</div>
				  		<div class="form-group">
					   		 <label for="jurusan">Jurusan</label>
					   		 <select name="jurusan" id="jurusan" class="form-control">
					   		 <?php foreach($jurusan as $jrs) : ?>
					   		 	<?php if($jrs == $mahasiswa['jurusan']) : ?>
					   		 	<option value="<?= $jrs; ?>" selected><?=  $jrs;?></option>
					   		 	<?php else : ?>
								<option value="<?= $jrs; ?>"><?=  $jrs;?></option>
								<?php endif; ?>
					   		<?php endforeach; ?>
					   		 </select>
				  		</div>        
				  		
						<button type="submit" class="btn btn-primary float-right">Ubah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
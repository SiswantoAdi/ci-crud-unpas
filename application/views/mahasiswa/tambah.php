<div class="container">
	<div class="row mt-3">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="<?= base_url(); ?>mahasiswa/tambah" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa...">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label>
							<input type="text" name="nrp" class="form-control" id="nrp" placeholder="Masukkan NRP Mahasiswa...">
							<small class="form-text text-danger"><?= form_error('nrp'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" id="email" placeholder="email@example.com">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select name="jurusan" id="jurusan" class="form-control">
								<option value="Tekhnik Informatika">Tekhnik Informatika</option>
								<option value="Tekhnik Industri">Tekhnik Industri</option>
								<option value="Teknik Planologi">Tekhnik Planologi</option>
								<option value="Teknik Mesin">Tekhnik Mesin</option>
								<option value="Tekhnik Lingkungan">Tekhnik Lingkungan</option>
							</select>
						</div>

						<button type="submit" class="btn btn-primary float-right">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
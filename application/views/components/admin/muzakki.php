<?= $this->app->notif() ?>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-6">
				<div class="card-title">
					Data Muzakki
				</div>
			</div>
			<div class="col-6" align="right">
				<button class="btn btn-primary" type="button" onclick="modal.open('#create')">
					<i data-feather="plus"></i>
					Tambah
				</button>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-hover" id="data-muzakki">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Tempat</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Pekerjaan</th>
						<th>Perkawinan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($muzakki as $key => $item): ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td><?= $item->nama ?></td>
							<td><?= $item->tempat_lahir ?></td>
							<td><?= $item->tanggal_lahir ?></td>
							<td><?= $item->alamat ?></td>
							<td><?= $item->jenis_kelamin == '1' ? 'Laki-laki' : 'Perempuan' ?></td>
							<td><?= $item->pekerjaan ?></td>
							<td><?= $item->status_perkawinan == '1' ? 'Sudah Kawin' : 'Belum Kawin' ?></td>
							<td class="text-center">
								<button class="btn btn-sm btn-edit btn-primary" type="button" onclick="edit(
									'<?= $item->id ?>',
									'<?= $item->nama ?>',
									'<?= $item->tempat_lahir ?>',
									'<?= $item->tanggal_lahir ?>',
									'<?= $item->alamat ?>',
									'<?= $item->jenis_kelamin ?>',
									'<?= $item->pekerjaan ?>',
									'<?= $item->status_perkawinan ?>'
								)">
									<i data-feather="edit"></i>
								</button>
								<button class="btn btn-sm btn-danger" type="button" onclick="destroy(
									'<?= $item->id ?>',
									'<?= $item->nama ?>'
								)">
									<i data-feather="delete"></i>
								</button>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('admin/muzakki/store') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Tambah Muzakki</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" required="true">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" rows="3" class="form-control" required="true" placeholder="Masukkan Alamat"></textarea>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control" required="true">
							<option value="">- Pilih Jenis Kelamin -</option>
							<option value="1">Laki-laki</option>
							<option value="2">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="pekerjaan" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Status Perkawinan</label>
						<select name="status_perkawinan" class="form-control" required="true">
							<option value="">- Pilih Status Perkawinan -</option>
							<option value="1">Sudah Kawin</option>
							<option value="0">Belum Kawin</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('admin/muzakki/update') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Edit Muzakki</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" required="true">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" rows="3" class="form-control" required="true" placeholder="Masukkan Alamat"></textarea>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control" required="true">
							<option value="">- Pilih Jenis Kelamin -</option>
							<option value="1">Laki-laki</option>
							<option value="2">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input type="text" class="form-control" placeholder="Masukkan Pekerjaan" name="pekerjaan" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Status Perkawinan</label>
						<select name="status_perkawinan" class="form-control" required="true">
							<option value="">- Pilih Status Perkawinan -</option>
							<option value="1">Sudah Kawin</option>
							<option value="0">Belum Kawin</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('admin/muzakki/destroy') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Hapus Muzakki</div>
				</div>
				<div class="modal-body">
					<p>Anda yakin menghapus data muzakki <strong class="nama">...</strong>?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
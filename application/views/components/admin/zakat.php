<?= $this->app->notif() ?>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-6">
				<div class="card-title">
					Data Zakat
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
			<table class="table table-hover" id="data-zakat">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($zakat as $key => $item): ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td><?= $item->nama ?></td>
							<td class="text-center">
								<button class="btn btn-sm btn-edit btn-primary" type="button" onclick="edit(
									'<?= $item->id ?>',
									'<?= $item->nama ?>'
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
			<form action="<?= base_url('admin/zakat/store') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Tambah Zakat</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="true" autocomplete="off" maxlength="50">
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
			<form action="<?= base_url('admin/zakat/update') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Edit Zakat</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="true" autocomplete="off" maxlength="50">
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
			<form action="<?= base_url('admin/zakat/destroy') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Hapus Zakat</div>
				</div>
				<div class="modal-body">
					<p>Anda yakin menghapus data zakat <strong class="nama">...</strong>?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
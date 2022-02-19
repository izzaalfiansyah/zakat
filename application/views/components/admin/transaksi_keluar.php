<?= $this->app->notif() ?>
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-6">
				<div class="card-title">
					Data Transaksi Zakat Keluar
				</div>
			</div>
			<div class="col-md-6" align="right">
				<a class="btn btn-danger" target="_blank" href="<?= base_url('admin/laporan/keluar') ?>">Print</a>
				<button class="btn btn-primary" type="button" onclick="modal.open('#create')">
					<i data-feather="plus"></i>
					Tambah
				</button>
			</div>
		</div>
	</div>
	<div class="card-body">
		<?php  
			$bulan = [
				1 => 'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			];
		?>
		<form method="get">
			<div class="row">
				<div class="col-md-2">
					<span>Filter:</span>
					<button type="submit" style="float: right;" class="btn btn-block btn-primary mb-1"><i data-feather="search"></i></button>
				</div>
				<div class="col-md-3 col-6">
					<div class="form-group mb-1">
						<select name="bulan" class="form-control">
							<option value="">Semua Bulan</option>
							<?php for($i = 1; $i <= count($bulan); $i++): ?>
								<option <?= isset($_GET['bulan']) ? ($_GET['bulan'] == $i ? 'selected="true"' : '') : '' ?> value="<?= $i ?>"><?= $bulan[$i] ?></option>
							<?php endfor ?>
						</select>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="form-group mb-1">
						<input type="number" autocomplete="off" min="1970" max="<?= date('Y') ?>" class="form-control" placeholder="Tahun" name="tahun" value="<?= isset($_GET['tahun']) ? $_GET['tahun'] : '' ?>">
					</div>
				</div>
			</div>
		</form>
		<div class="table-responsive">
			<table class="table table-hover" id="data-transaksi">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nama Mustahik</th>
						<th>Jumlah</th>
						<th>Keterangan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($transaksi as $key => $item): ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td><?= $this->app->date($item->tanggal) ?></td>
							<td><?= $item->mustahik->nama ?></td>
							<td>Rp. <?= str_replace(',', '.', number_format($item->jumlah)) ?></td>
							<td><?= $item->keterangan ?></td>
							<td class="text-center">
								<button class="btn btn-sm btn-edit btn-primary" type="button" onclick="edit({
									id: '<?= $item->id ?>',
									id_mustahik: '<?= $item->id_mustahik ?>',
									jumlah: '<?= $item->jumlah ?>',
									tanggal: '<?= $item->tanggal ?>',
									keterangan: '<?= $item->keterangan ?>'
								})">
									<i data-feather="edit"></i>
								</button>
								<button class="btn btn-sm btn-danger" type="button" onclick="destroy({
									id: '<?= $item->id ?>'
								})">
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
			<form action="<?= base_url('admin/transaksi_keluar/store') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Tambah Transaksi</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Pilih Mustahik</label>
						<select name="id_mustahik" class="form-control" required="true">
							<option value="">- Pilih Mustahik -</option>
							<?php foreach ($mustahik as $key => $item): ?>
								<option value="<?= $item->id ?>"><?= $item->nama ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" class="form-control" placeholder="Masukkan Jumlah" name="jumlah" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" placeholder="Masukkan Tanggal" name="tanggal" required="true">
					</div>	
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" rows="3" class="form-control" required="true" placeholder="Masukkan Keterangan"></textarea>
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
			<form action="<?= base_url('admin/transaksi_keluar/update') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Edit Transaksi</div>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Pilih Mustahik</label>
						<select name="id_mustahik" class="form-control" required="true">
							<option value="">- Pilih Mustahik -</option>
							<?php foreach ($mustahik as $key => $item): ?>
								<option value="<?= $item->id ?>"><?= $item->nama ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Jumlah</label>
						<input type="number" class="form-control" placeholder="Masukkan Jumlah" name="jumlah" required="true" autocomplete="off" maxlength="50">
					</div>
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" placeholder="Masukkan Tanggal" name="tanggal" required="true">
					</div>	
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" rows="3" class="form-control" required="true" placeholder="Masukkan Keterangan"></textarea>
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
			<form action="<?= base_url('admin/transaksi_keluar/destroy') ?>" method="post">
				<div class="modal-header">
					<div class="modal-title">Hapus Transaksi</div>
				</div>
				<div class="modal-body">
					<p>Anda yakin menghapus data transaksi terpilih?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="button" data-bs-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-danger">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
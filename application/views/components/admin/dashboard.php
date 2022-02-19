<div class="card">
	<div class="card-body">
		<div class="text-center">
			<h3><?= env('APP_NAME') ?></h3>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<form method="get">
			<div class="row">
				<div class="col-md-8">
					<label>Filter Tahun :</label>
				</div>
				<div class="col-md-4">
					<div class="input-group">
						<input type="number" class="form-control" value="<?= isset($_GET['tahun']) ? $_GET['tahun'] : date('Y') ?>" placeholder="Masukkan Tahun" name="tahun" autocomplete="off" min="1970" max="<?= date('Y') ?>">
						<div class="input-group-append">
							<button type="submit" class="input-group-btn btn btn-primary">
								<i data-feather="search"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="card">
			<div class="card-body text-center">
				SALDO FITRAH MASUK
				<h3 class="mt-2">Rp. <?= str_replace(',', '.', number_format($masuk->total)) ?></h3>
				<small><?= $masuk->tahun == date('Y') ? 'Tahun ini' : 'Tahun ' . $masuk->tahun ?></small>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body text-center">
				SALDO KELUAR 
				<h3 class="mt-2">Rp. <?= str_replace(',', '.', number_format($keluar->total)) ?></h3>
				<small><?= $keluar->tahun == date('Y') ? 'Tahun ini' : 'Tahun ' . $keluar->tahun ?></small>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-body text-center">
				TOTAL SALDO 
				<h3 class="mt-2">Rp. <?= str_replace(',', '.', number_format($masuk->total - $keluar->total)) ?></h3>
				<small><?= $masuk->tahun == date('Y') ? 'Tahun ini' : 'Tahun ' . $keluar->tahun ?></small>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Jenis Zakat</th>
						<th class="d-none d-md-table-cell">Tahun</th>
						<th>Pemasukan</th>
					</tr>
				</thead>
				<tbody>
					<?php $total = 0; foreach ($zakat as $key => $item): $total += $item->pemasukan ?>
						<tr>
							<td><?= $key + 1 ?></td>
							<td><?= $item->nama ?></td>
							<td class="d-none d-md-table-cell"><?= isset($_GET['tahun']) ? $_GET['tahun'] : date('Y') ?></td>
							<td>Rp. <?= str_replace(',', '.', number_format($item->pemasukan)) ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<td class="d-md-table-cell d-none" colspan="3" align="center"><strong>Total</strong></td>
						<td class="d-md-none d-table-cell" colspan="2" align="center"><strong>Total</strong></td>
						<th>Rp. <?= str_replace(',', '.', number_format($total)) ?></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
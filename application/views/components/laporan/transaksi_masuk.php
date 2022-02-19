<style>
	th, td {
		padding: 3px;
		border: 1px solid black;
	}
</style>
<body style="padding: 10px">
	<div style="display: flex;">
		<div style="width: 20%; text-align: right;">
			<img src="<?= base_url('favicon.png') ?>" style="width: 100px; height: 120px;">
		</div>
		<div style="width: 80%; text-align: center; font-size: 22px;">
			<br>
			<b><?= strtoupper(str_replace('Zakat ', 'Zakat<br/>', env('APP_NAME'))) ?></b>
		</div>
	</div>
	<br>
	<hr>
	<br>
	<div>
		<div style="width: 95%; margin-left: 2.5%;">
			Data transaksi zakat masuk:
			<br><br>
			<table style="width: 100%; border: 1px solid gray; border-collapse: collapse;">
	            <thead>
	                <tr>
	                    <th>No</th>
	                    <th>Tanggal</th>
	                    <th>Jenis Zakat</th>
	                    <th>Nama Muzakki</th>
	                    <th>Jumlah</th>
	                    <th>Keterangan</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php foreach ($transaksi as $key => $item): ?>
	            		<tr>
	            			<td align="center"><?= $key + 1 ?></td>
							<td><?= $this->app->date($item->tanggal) ?></td>
	            			<td><?= $item->zakat->nama ?></td>
	            			<td><?= $item->muzakki->nama ?></td>
	            			<td>Rp. <?= str_replace(',', '.', number_format($item->jumlah)) ?></td>
	            			<td><?= $item->keterangan ?></td>
	            		</tr>
	            	<?php endforeach ?>
	            </tbody>
	        </table>
	       </div>
	</div>
	<div style="position: fixed; bottom: 0; right: 0">
		<?= date('d-m-Y') ?>
	</div>
	<script>
		window.print();
		setTimeout(function() {
			window.close();
		}, 5000);
	</script>
</body>
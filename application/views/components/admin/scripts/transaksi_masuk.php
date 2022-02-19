<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.css') ?>">
<script src="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.js') ?>"></script>

<script>
	var datatable = initTable('#data-transaksi');

	function edit(transaksi) {
		modal.open('#edit');

		document.querySelector('#edit form').action = base_url('admin/transaksi_masuk/update/' + transaksi.id);

		document.querySelector('#edit [name=id_muzakki]').value = transaksi.id_muzakki;
		document.querySelector('#edit [name=id_zakat]').value = transaksi.id_zakat;
		document.querySelector('#edit [name=jumlah]').value = transaksi.jumlah;
		document.querySelector('#edit [name=tanggal]').value = transaksi.tanggal;
		document.querySelector('#edit [name=keterangan]').value = transaksi.keterangan;
	}

	function destroy(id, nama) {
		modal.open('#delete');

		document.querySelector('#delete form').action = base_url('admin/transaksi_masuk/destroy/' + transaksi.id);
	}
</script>
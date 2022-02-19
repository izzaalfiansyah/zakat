<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.css') ?>">
<script src="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.js') ?>"></script>

<script>
	var datatable = initTable('#data-zakat');

	function edit(id, nama, bentuk, saldo, keterangan) {
		modal.open('#edit');

		document.querySelector('#edit form').action = base_url('admin/zakat/update/' + id);

		document.querySelector('#edit [name=nama]').value = nama;
	}

	function destroy(id, nama) {
		modal.open('#delete');

		document.querySelector('#delete form').action = base_url('admin/zakat/destroy/' + id);

		document.querySelector('#delete .nama').innerHTML = nama;
	}
</script>
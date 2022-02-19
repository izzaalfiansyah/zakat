<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.css') ?>">
<script src="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.js') ?>"></script>

<script>
	var datatable = initTable('#data-mustahik');

	function edit(id, nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, golongan) {
		modal.open('#edit');

		document.querySelector('#edit form').action = base_url('admin/mustahik/update/' + id);

		document.querySelector('#edit [name=nama]').value = nama;
		document.querySelector('#edit [name=tempat_lahir]').value = tempat_lahir;
		document.querySelector('#edit [name=tanggal_lahir]').value = tanggal_lahir;
		document.querySelector('#edit [name=alamat]').value = alamat;
		document.querySelector('#edit [name=jenis_kelamin]').value = jenis_kelamin;
		document.querySelector('#edit [name=golongan]').value = golongan;
	}

	function destroy(id, nama) {
		modal.open('#delete');

		document.querySelector('#delete form').action = base_url('admin/mustahik/destroy/' + id);

		document.querySelector('#delete .nama').innerHTML = nama;
	}
</script>
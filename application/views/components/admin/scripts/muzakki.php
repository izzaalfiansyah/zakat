<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.css') ?>">
<script src="<?= base_url('assets/plugins/datatables/vanilla-dataTables.min.js') ?>"></script>

<script>
	var datatable = initTable('#data-muzakki');

	function edit(id, nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, pekerjaan, status_perkawinan) {
		modal.open('#edit');

		document.querySelector('#edit form').action = base_url('admin/muzakki/update/' + id);

		document.querySelector('#edit [name=nama]').value = nama;
		document.querySelector('#edit [name=tempat_lahir]').value = tempat_lahir;
		document.querySelector('#edit [name=tanggal_lahir]').value = tanggal_lahir;
		document.querySelector('#edit [name=alamat]').value = alamat;
		document.querySelector('#edit [name=jenis_kelamin]').value = jenis_kelamin;
		document.querySelector('#edit [name=pekerjaan]').value = pekerjaan;
		document.querySelector('#edit [name=status_perkawinan]').value = status_perkawinan;
	}

	function destroy(id, nama) {
		modal.open('#delete');

		document.querySelector('#delete form').action = base_url('admin/muzakki/destroy/' + id);

		document.querySelector('#delete .nama').innerHTML = nama;
	}
</script>
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/app.js"></script>
<script type="text/javascript">
	function dismissBackdrop() {
		document.querySelectorAll('.modal-backdrop').forEach(obj => {
			obj.remove();
		});
	}

	var modal = {
		open: (selector) => {
			const tag = document.querySelector(selector);
			const modalS = new bootstrap.Modal(tag);
			modalS.show();
		},
		close: (selector) => {
			const tag = document.querySelector(selector);
			const modalS = new bootstrap.Modal(tag);
			modalS.hide();

			tag.style.display = 'none';
			document.body.classList.remove('modal-open');
			dismissBackdrop();
		}
	}

	document.querySelectorAll('[data-dismiss=modal]').forEach(obj => {
		obj.onclick(dismissBackdrop);
	})

	function initTable(selector) {
		var table = document.querySelector(selector);
		var datatable = new DataTable(table);


		document.querySelectorAll('.dataTable-selector').forEach(obj => {
			obj.classList.add('form-control');
		})

		document.querySelectorAll('.dataTable-input').forEach(obj => {
			obj.classList.add('form-control');
		})

		return datatable;
	}

	function base_url(path) {
		return '<?= base_url() ?>' + path;
	}
</script>
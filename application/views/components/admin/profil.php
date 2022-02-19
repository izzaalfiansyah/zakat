<?= $this->app->notif() ?>
<form action="<?= base_url('admin/profil/update') ?>" method="post">
	<div class="card">
		<div class="card-header">
			<div class="card-title">Pengaturan Profil</div>
		</div>
		<div class="card-body">
			<div class="form-group mb-2">
				<label>Username</label>
				<input type="text" class="form-control" required="true" placeholder="Masukkan Username" name="username" minlength="5" maxlength="20" value="<?= $user->username ?>">
			</div>
			<div class="form-group mb-2">
				<label>Password Lama</label>
				<input type="password" class="form-control" required="true" placeholder="Masukkan Password" name="password_lama">
			</div>
			<div class="form-group mb-2">
				<label>Password Baru</label>
				<input type="password" class="form-control" placeholder="Masukkan Password Baru" name="password_baru" minlength="8" maxlength="16">
				<small>Optional (Boleh tidak diisi)</small>
			</div>
			<div class="mt-4">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</form>
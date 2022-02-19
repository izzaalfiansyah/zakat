
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php $this->load->view('components/css') ?>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang</h1>
							<p class="lead">
								Masukkan data anda
							</p>
						</div>

						<?= $this->app->notif() ?>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" autocomplete="off" type="text" name="username" placeholder="Masukkan username" required="true" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" autocomplete="off" type="password" name="password" placeholder="Masukkan password" required="true" />
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<?php $this->load->view('components/js') ?>

</body>

</html>
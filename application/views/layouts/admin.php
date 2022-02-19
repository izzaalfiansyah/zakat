
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php $this->load->view('components/css') ?>
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="<?= base_url('') ?>">
		          <span class="align-middle">Zakat</span>
		        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main Menu
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('admin/dashboard') ?>">
			              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
			            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('admin/zakat') ?>">
			              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Zakat</span>
			            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('admin/muzakki') ?>">
			              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Muzakki</span>
			            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('admin/mustahik') ?>">
			              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Mustahik</span>
			            </a>
					</li>

					<li class="sidebar-item">
						<a href="#transaksi" data-bs-toggle="collapse" class="sidebar-link collapsed">
			              <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Transaksi</span>
			            </a>
						<ul id="transaksi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('admin/transaksi/masuk') ?>">Masuk</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('admin/transaksi/keluar') ?>">Keluar</a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="<?= base_url('admin/pengaturan') ?>">
			              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Pengaturan</span>
			            </a>
					</li>

				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
				            	<i class="align-middle" data-feather="settings"></i>
				            </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
				                <span class="text-dark"><?= $this->app->user()->username ?></span>
				            </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="<?= base_url('admin/profil') ?>"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>"><i class="align-middle me-1" data-feather="log-out"></i>Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><?= $title ?></h1>

					<?= $content ?>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="https://fopegram.id" target="_blank" class="text-muted"><strong>Fopegram</strong></a> &copy; 2021
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<?php $this->load->view('components/js') ?>
	<?= $script ?>

</body>

</html>
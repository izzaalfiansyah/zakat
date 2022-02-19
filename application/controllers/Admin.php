<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			return redirect(base_url('login'));
		}
	}

	public function index()
	{
		return $this->dashboard();
	}

	public function dashboard()
	{
		$this->load->model('Transaksi_Masuk', 'masuk');
		$this->load->model('Transaksi_Keluar', 'keluar');
		$this->load->model('zakat');
		
		$masuk = $this->masuk->total();
		$keluar = $this->keluar->total();
		$zakat = $this->zakat->total();

		return $this->app->admin('Dashboard', 'dashboard', '', compact('masuk', 'keluar', 'zakat'));
	}

	public function zakat($action = '', $id = '')
	{
		$this->load->model('Zakat', 'zakat');

		if ($action == 'store') {
			$this->zakat->store();

			return redirect(base_url('admin/zakat'));
		}

		if ($action == 'update') {
			$this->zakat->update($id);

			return redirect(base_url('admin/zakat'));
		}

		if ($action == 'destroy') {
			$this->zakat->destroy($id);

			return redirect(base_url('admin/zakat'));
		}

		$zakat = $this->zakat->all();
		return $this->app->admin('Zakat', 'zakat', 'zakat', compact('zakat'));
	}

	public function muzakki($action = '', $id = '')
	{
		$this->load->model('Muzakki', 'muzakki');

		if ($action == 'store') {
			$this->muzakki->store();

			return redirect(base_url('admin/muzakki'));
		}

		if ($action == 'update') {
			$this->muzakki->update($id);

			return redirect(base_url('admin/muzakki'));
		}

		if ($action == 'destroy') {
			$this->muzakki->destroy($id);

			return redirect(base_url('admin/muzakki'));
		}

		$muzakki = $this->muzakki->all();
		return $this->app->admin('Muzakki', 'muzakki', 'muzakki', compact('muzakki'));
	}

	public function mustahik($action = '', $id = '')
	{
		$this->load->model('Mustahik', 'mustahik');

		if ($action == 'store') {
			$this->mustahik->store();

			return redirect(base_url('admin/mustahik'));
		}

		if ($action == 'update') {
			$this->mustahik->update($id);

			return redirect(base_url('admin/mustahik'));
		}

		if ($action == 'destroy') {
			$this->mustahik->destroy($id);

			return redirect(base_url('admin/mustahik'));
		}

		$mustahik = $this->mustahik->all();
		return $this->app->admin('Mustahik', 'mustahik', 'mustahik', compact('mustahik'));
	}

	public function transaksi_masuk($action = '', $id = '')
	{
		$this->load->model('Transaksi_Masuk', 'transaksi');
		$this->load->model('Zakat', 'zakat');
		$this->load->model('Muzakki', 'muzakki');

		if ($action == 'store') {
			$this->transaksi->store();

			return redirect(base_url('admin/transaksi/masuk'));
		}

		if ($action == 'update') {
			$this->transaksi->update($id);

			return redirect(base_url('admin/transaksi/masuk'));
		}

		if ($action == 'destroy') {
			$this->transaksi->destroy($id);

			return redirect(base_url('admin/transaksi/masuk'));
		}

		$transaksi = $this->transaksi->all();
		$zakat = $this->zakat->all();
		$muzakki = $this->muzakki->all();

		return $this->app->admin('Transaksi Masuk', 'transaksi_masuk', 'transaksi_masuk', compact('transaksi', 'zakat', 'muzakki'));
	}

	public function transaksi_keluar($action = '', $id = '')
	{
		$this->load->model('Transaksi_Keluar', 'transaksi');
		$this->load->model('Mustahik', 'mustahik');

		if ($action == 'store') {
			$this->transaksi->store();

			return redirect(base_url('admin/transaksi/keluar'));
		}

		if ($action == 'update') {
			$this->transaksi->update($id);

			return redirect(base_url('admin/transaksi/keluar'));
		}

		if ($action == 'destroy') {
			$this->transaksi->destroy($id);

			return redirect(base_url('admin/transaksi/keluar'));
		}

		$transaksi = $this->transaksi->all();
		$mustahik = $this->mustahik->all();

		return $this->app->admin('Transaksi Keluar', 'transaksi_keluar', 'transaksi_keluar', compact('transaksi', 'mustahik'));
	}

	public function laporan($tipe)
	{
		if ($tipe == 'masuk') {
			$this->load->model('Transaksi_Masuk', 'transaksi');

			$transaksi = $this->transaksi->all();
			return $this->load->view('components/laporan/transaksi_masuk', compact('transaksi'));
		}

		if ($tipe == 'keluar') {
			$this->load->model('Transaksi_Keluar', 'transaksi');

			$transaksi = $this->transaksi->all();
			return $this->load->view('components/laporan/transaksi_keluar', compact('transaksi'));
		}
	}

	public function profil($action = 'store')
	{
		$this->load->model('User', 'user');
		$id = $this->session->userdata('id');

		if ($action == 'update') {
			$this->user->update($id);

			return redirect(base_url('admin/profil'));
		}

		$user = $this->user->find($id);
		return $this->app->admin('Profil', 'profil', '', compact('user'));
	}

	public function pengaturan()
	{
		return redirect(base_url('admin/profil'));
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
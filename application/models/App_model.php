<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	public function admin($title = '', $content = '', $script = '', $data = [])
	{
		return $this->load->view('layouts/admin', [
			'title' => $title,
			'content' => $content ? $this->load->view('components/admin/' . $content, $data, true) : '',
			'script' => $script ? $this->load->view('components/admin/scripts/' . $script, $data, true) : ''
		]);
	}

	public function notif($message = '', $type = '')
	{
		if ($message) {
			$this->session->set_flashdata('notif', '
				<div class="alert alert-' . $type . ' alert-dismissible">
					<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					<div class="alert-message">
						' . $message . '
					</div>
				</div>
			');
		} else {
			return $this->session->flashdata('notif');
		}
	}

	public function first($array)
	{
		foreach ($array as $key => $item) {
			return $item;
		}
	}

	public function user()
	{
		$id_user = $this->session->userdata('id');
		$user = $this->db->get_where('data_user', ['id' => $id_user])->row();
		return $user;
	}

	public function date($time)
	{
		$tanggal = date('d', strtotime($time));

		$data_bulan = [
			1 => 'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		];

		$bulan = $data_bulan[(int) date('m', strtotime($time))];
		$tahun = date('Y', strtotime($time));

		return $tanggal . ' ' . $bulan . ' ' . $tahun;
	}

}

/* End of file App_model.php */
/* Location: ./application/models/App_model.php */
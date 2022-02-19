<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mustahik extends CI_Model {

	public $table = 'data_mustahik';

	public function all()
	{
		$this->db->order_by('nama', 'asc');
		$mustahik = $this->db->get($this->table)->result();

		return $mustahik;
	}

	public function data()
	{
		return [
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'golongan' => $this->input->post('golongan')
		];
	}

	public function rules()
	{
		$this->validation->set_rules('nama', 'nama', 'required|max_length[50]');
		$this->validation->set_rules('tempat_lahir', 'tempat lahir', 'required|max_length[50]');
		$this->validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
		$this->validation->set_rules('alamat', 'alamat', 'required');
		$this->validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required|in_list[1,2]');
		$this->validation->set_rules('golongan', 'golongan', 'required|max_length[50]');
	}

	public function store()
	{
		$this->rules();

		if ($this->validation->run()) {
			$this->db->insert($this->table, $this->data());

			$this->app->notif('data berhasil disimpan', 'success');
		} else {
			$this->app->notif($this->app->first($this->validation->error_array()), 'danger');
		}
	}

	public function update($id)
	{
		$this->rules();

		if ($this->validation->run()) {
			$this->db->update($this->table, $this->data(), ['id' => $id]);

			$this->app->notif('data berhasil diedit', 'success');
		} else {
			$this->app->notif($this->app->first($this->validation->error_array()), 'danger');
		}
	}

	public function destroy($id)
	{
		$this->db->delete($this->table, ['id' => $id]);
		$this->app->notif('data berhasil dihapus', 'warning');
	}

}

/* End of file Mustahik.php */
/* Location: ./application/models/Mustahik.php */
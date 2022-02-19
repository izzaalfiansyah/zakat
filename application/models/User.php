<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public $table = 'data_user';

	public function all()
	{
		$this->db->order_by('nama', 'asc');
		$user = $this->db->get($this->table)->result();

		return $user;
	}

	public function data()
	{
		return [
			'username' => $this->input->post('username')
		];
	}

	public function rules()
	{
		$this->validation->set_rules('username', 'username', 'required|max_length[20]|min_length[5]');
	}

	public function find($id)
	{
		$user = $this->db->get_where($this->table, ['id' => $id])->row();
		return $user;
	}

	public function store()
	{
		$this->rules();
		$this->validation->set_rules('password', 'password', 'required|max_length[16]|min_length[8]');

		if ($this->validation->run()) {
			$data = $this->data();
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

			$this->db->insert($this->table, $data);

			$this->app->notif('data berhasil disimpan', 'success');
		} else {
			$this->app->notif($this->app->first($this->validation->error_array()), 'danger');
		}
	}

	public function update($id)
	{
		$this->rules();
		$this->validation->set_rules('password_lama', 'password lama', 'required');

		if ($this->validation->run()) {
			$user = $this->db->get_where($this->table, ['id' => $id])->row();

			if (password_verify($this->input->post('password_lama'), $user->password)) {
				$data = $this->data();

				if ($this->input->post('password_baru')) {
					$data['password'] = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);
				}

				$this->db->update($this->table, $data, ['id' => $id]);

				$this->app->notif('data berhasil diedit', 'success');
			} else {
				$this->app->notif('password salah', 'danger');
			}
		} else {
			$this->app->notif($this->app->first($this->validation->error_array()), 'danger');
		}
	}

	public function destroy($id)
	{
		$this->db->delete($this->table, ['id' => $id]);
		$this->app->notif('data berhasil dihapus', 'warning');
	}

	public function login()
	{
		$this->validation->set_rules('username', 'username', 'required');
		$this->validation->set_rules('password', 'password', 'required');

		if ($this->validation->run()) {
			$user = $this->db->get_where($this->table, ['username' => $this->input->post('username')])->row();

			if ($user) {
				if (password_verify($this->input->post('password'), $user->password)) {
					$this->app->notif('berhasil login', 'success');
					return $user;
				} else {
					$this->app->notif('password salah', 'danger');
				}
			} else {
				$this->app->notif('username salah', 'danger');
			}
		} else {
			$this->app->notif($this->app->first($this->validation->error_array()), 'danger');
		}

	}

}

/* End of file User.php */
/* Location: ./application/models/User.php */
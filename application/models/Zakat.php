<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Model {

	public $table = 'data_zakat';

	public function all()
	{
		$this->db->order_by('nama', 'asc');
		$zakat = $this->db->get($this->table)->result();

		return $zakat;
	}

	public function data()
	{
		return [
			'nama' => $this->input->post('nama')
		];
	}

	public function rules()
	{
		$this->validation->set_rules('nama', 'nama', 'required|max_length[50]');
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

	public function total()
	{
		$tahun = $this->input->get('tahun') ? $this->input->get('tahun') : date('Y');
		$data = $this->db->get($this->table)->result();

		foreach ($data as $key => $item) {
			$transaksi = $this->db
			->select('sum(jumlah) as total, date_format(tanggal, "%Y") as tahun')
			->group_by('date_format(tanggal, "%Y")')
			->get_where('transaksi_zakat_masuk', [
				'id_zakat' => $item->id,
				'date_format(tanggal, "%Y") =' => $tahun
			])->row();

			if ($transaksi) {
				$data[$key]->pemasukan = $transaksi->total;
				$data[$key]->tahun = $transaksi->tahun;
			} else {
				$data[$key]->pemasukan = 0;
				$data[$key]->tahun = $tahun;
			}
		}

		return $data;
	}

}

/* End of file Zakat.php */
/* Location: ./application/models/Zakat.php */
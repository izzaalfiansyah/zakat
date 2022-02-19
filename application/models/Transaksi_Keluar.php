<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_Keluar extends CI_Model {

	public $table = 'transaksi_zakat_keluar';

	public function all()
	{
		$where = [];
		$this->db->order_by('tanggal', 'desc');

		if ($bulan = $this->input->get('bulan')) {
			$where['DATE_FORMAT(tanggal, "%m") = '] = strlen($bulan) == 1 ? '0' . $bulan : $bulan;
		}

		if ($tahun = $this->input->get('tahun')) {
			$where['DATE_FORMAT(tanggal, "%Y") = '] = $tahun;
		}

		$this->db->where($where);
		
		$transaksi_keluar = $this->db->get($this->table)->result();

		foreach ($transaksi_keluar as $key => $item) {
			$transaksi_keluar[$key]->mustahik = $this->db->get_where('data_mustahik', ['id' => $item->id_mustahik])->row();
		}

		return $transaksi_keluar;
	}

	public function data()
	{
		return [
			'id_mustahik' => $this->input->post('id_mustahik'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal'),
			'keterangan' => $this->input->post('keterangan')
		];
	}

	public function rules()
	{
		$this->validation->set_rules('id_mustahik', 'id mustahik', 'required|integer');
		$this->validation->set_rules('jumlah', 'jumlah', 'required|integer');
		$this->validation->set_rules('tanggal', 'tanggal', 'required');
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

		$this->db->from($this->table);
		$this->db->select('sum(jumlah) as total, date_format(tanggal, "%Y") as tahun');
		$this->db->where('date_format(tanggal, "%Y") =', $tahun);
		$this->db->group_by('date_format(tanggal, "%Y")');

		$data = $this->db->get()->row();

		return $data ? $data : (object) ['total' => 0, 'tahun' => $tahun];
	}

}

/* End of file Transaksi_Keluar.php */
/* Location: ./application/models/Transaksi_Keluar.php */
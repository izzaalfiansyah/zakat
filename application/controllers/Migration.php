<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration extends CI_Controller {

	public function index()
	{
		return $this->up();
	}

	public function up()
	{
		$database = env('DB_NAME');

		$this->db->query("drop database $database");

		$this->db->query("create database $database");

		$this->db->query("use $database");

		$this->db->query("create table data_user (
			id bigint primary key not null auto_increment,
			username varchar(20) not null,
			password varchar(255) not null,
			created_at timestamp default current_timestamp()
		)");

		$this->db->query("create table data_zakat (
			id bigint primary key not null auto_increment,
			nama varchar(50) not null
		)");

		$this->db->query("create table data_muzakki (
			id bigint primary key not null auto_increment,
			nama varchar(50) not null,
			tempat_lahir varchar(50) not null,
			tanggal_lahir date not null,
			alamat text not null,
			jenis_kelamin enum('1', '2') not null comment '1 = pria, 2 = wanita',
			pekerjaan varchar(50) not null,
			status_perkawinan enum('0', '1') not null comment '0 = belum, 1 = kawin'
		)");

		$this->db->query("create table data_mustahik (
			id bigint primary key not null auto_increment,
			nama varchar(50) not null,
			tempat_lahir varchar(50) not null,
			tanggal_lahir date not null,
			alamat text not null,
			jenis_kelamin enum('1', '2') not null comment '1 = pria, 2 = wanita',
			golongan varchar(50) not null
		)");

		$this->db->query("create table transaksi_zakat_masuk (
			id bigint primary key not null auto_increment,
			id_zakat bigint not null,
			id_muzakki bigint not null,
			jumlah int not null,
			tanggal date not null,
			keterangan text default null,
			created_at timestamp default current_timestamp(),
			constraint transaksi_zakat_masuk_id_zakat foreign key (id_zakat) references data_zakat(id),
			constraint transaksi_zakat_masuk_id_muzakki foreign key (id_muzakki) references data_muzakki(id)
		)");

		$this->db->query("create table transaksi_zakat_keluar (
			id bigint primary key not null auto_increment,
			id_mustahik bigint not null,
			jumlah int not null,
			tanggal date not null,
			keterangan text default null,
			created_at timestamp default current_timestamp(),
			constraint transaksi_zakat_masuk_id_mustahik foreign key (id_mustahik) references data_mustahik(id)
		)");

		$this->seed();
		echo 'Migrasi berhasil dijalankan';
		return 1;
	}

	public function seed()
	{
		$this->db->insert('data_user', [
			'username' => 'superadmin',
			'password' => '$2y$10$EpZ.BV7abrv6q63g9olZF.iYCWbKUXtk8Gjb/S.qVtaKruhiBM.EO'
		]);
	}

}

/* End of file Migration.php */
/* Location: ./application/controllers/Migration.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['login'] = 'auth';
$route['logout'] = 'auth/logout';

$route['admin/transaksi/masuk'] = 'admin/transaksi_masuk';
$route['admin/transaksi/keluar'] = 'admin/transaksi_keluar';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomePelanggan';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home-pelanggan']				= 'HomePelanggan';
$route['registrasi-pelanggan']				= 'HomePelanggan/registrasi';
$route['detail-produk/(:any)']		= 'HomePelanggan/detail_produk/$1';

//pelanggan
$route['login-pelanggan'] 				= 'LoginPelanggan/proses';
$route['logout-pelanggan'] 				= 'LoginPelanggan/logout';
$route['dashboard-pelanggan']				= 'DashboardPelanggan';
$route['profile-pelanggan/(:any)']				= 'DashboardPelanggan/profile/$1';
$route['password-pelanggan/(:any)']				= 'DashboardPelanggan/password/$1';
$route['order-pelanggan']				= 'DashboardPelanggan/my_order';
$route['riwayat-order'] 	        = 'DashboardPelanggan/riwayat_order';
$route['tambah-order-pelanggan'] 	        = 'DashboardPelanggan/tambah_order';
$route['tambah-order-pelanggan/(:any)'] 	        = 'DashboardPelanggan/tambah_order/$1';
$route['edit-order-pelanggan/(:any)'] 	    = 'DashboardPelanggan/edit_order/$1';
$route['hapus-order-pelanggan/(:any)']    	= 'DashboardPelanggan/hapus_order/$1';
$route['upload-bukti-tf-order/(:any)']    	= 'DashboardPelanggan/upload_bukti_tf/$1';
$route['update-order-pelanggan/(:any)/(:any)']    	= 'DashboardPelanggan/update_order/$1/$2';
$route['ulasan-order/(:any)']    	= 'DashboardPelanggan/ulasan_order/$1';

//pegawai
$route['administrator'] 				= 'Login';
$route['login'] 				= 'Login/proses';
$route['logout'] 				= 'Login/logout';
$route['dashboard']				= 'Dashboard';

//admin
$route['pegawai'] 				    = 'Pegawai';
$route['tambah-pegawai'] 	        = 'Pegawai/tambah';
$route['edit-pegawai/(:any)'] 	    = 'Pegawai/edit/$1';
$route['hapus-pegawai/(:any)']    	= 'Pegawai/hapus/$1';

$route['produk'] 				    = 'Produk';
$route['tambah-produk'] 	        = 'Produk/tambah';
$route['edit-produk/(:any)'] 	    = 'Produk/edit/$1';
$route['hapus-produk/(:any)']    	= 'Produk/hapus/$1';

$route['order'] 				    = 'Order';
$route['tambah-order'] 	        = 'Order/tambah';
$route['admin-riwayat-order']		= 'Order/riwayat';
$route['edit-order/(:any)'] 	    = 'Order/edit/$1';
$route['hapus-order/(:any)']    	= 'Order/hapus/$1';
$route['detail-order/(:any)']		= 'Order/detail/$1';
$route['update-status-order/(:any)/(:any)']		= 'Order/update_status/$1/$2';

$route['pelanggan'] 				    = 'Pelanggan';
$route['tambah-pelanggan'] 	        = 'Pelanggan/tambah';
$route['edit-pelanggan/(:any)'] 	    = 'Pelanggan/edit/$1';
$route['hapus-pelanggan/(:any)']    	= 'Pelanggan/hapus/$1';

$route['laporan-penjualan'] = 'Laporan/penjualan';
$route['cetak-laporan-penjualan'] = 'Laporan/cetak_penjualan';

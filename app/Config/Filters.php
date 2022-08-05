<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'filteruser'=> \App\Filters\FilterUser::class,
		'filtersiswa'=> \App\Filters\FilterSiswa::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'filteruser' => [
				'except' => [
					'welcome', 'welcome/*',
					'auth', 'auth/*',
					'home', 'home/*',
					'/',
					'Register', 'Register/*',
					'JobProfile', 'JobProfile /*',
					'Contact', 'Contact /*',
					'About', 'About /*',
					'Tentang_Perusahaan', 'Tentang_Perusahaan /*',
					'Visi_Misi', 'Visi_Misi /*',
					'Manajemen', 'Manajemen /*',
					
			]
		],
			'filtersiswa' => [
				'except' => [
				'welcome', 'welcome/*',
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'Register', 'Register/*',
				'JobProfile', 'JobProfile /*',
				'Contact', 'Contact /*',
				'About', 'About /*',
				'Tentang_Perusahaan', 'Tentang_Perusahaan /*',
				'Visi_Misi', 'Visi_Misi /*',
				'Manajemen', 'Manajemen /*',
				'Absensi', 'Absensi /*',
				]
			]
		],
		'after'  => [
			'filteruser' => [
				'except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/',
				'admin', 'admin/*',
				'Data_peserta', 'Data_peserta/*',
				'kampusasal', 'Kampusasal/*',
				'User', 'User/*',
				'ta', 'ta/*',
				'lampiran', 'lampiran/*',	
				'Daftarmasuk', 'Daftarmasuk /*',
				'Absen', 'Absen /*',
				'Profile', 'Profile /*',
		]
	],
			'filtersiswa' => [
				'except' => [
				

				]
			],
			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}

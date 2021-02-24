<?php 


	$title = "Kaisen Linux | The distribution for professional IT";
	
	$description = "Kaisen Linux is a complete operating system whose originality is to provide a set of tools dedicated to system administration and covering all the needs for diagnosing and dealing with faults or failures of an installed system and its components. The most important system tools are available.";

	$image = 'https://kaisenlinux.org/img/kaisen-social.png';
	$url = 'https://kaisenlinux.org';


	$release_version = 'Rolling 1.5';


	$links_download = [

		'MATE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/mate.png',
			'size' => '3.5Go',

			'links' => [
				[
                                        'name' => 'Mirror 1',
                                        'link' => 'https://iso.kaisenlinux.org/rolling/kaisenlinuxrolling1.5-amd64-MATE.iso',
                                ],
				[
					'name' => 'Mirror 2',
					'link' => 'https://kaisen.lf.je/rolling/kaisenlinuxrolling1.5-amd64-MATE.iso',
				],

			],

		],

		'KDE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/kde.png',
			'size' => '3.9Go',

			'links' => [
				[
                                        'name' => 'Mirror 1',
                                        'link' => 'https://iso.kaisenlinux.org/rolling/kaisenlinuxrolling1.5-amd64-KDE.iso',
                                ],
				[
					'name' => 'Mirror 2',
					'link' => 'https://kaisen.lf.je/rolling/kaisenlinuxrolling1.5-amd64-KDE.iso',
				],

			],

		],

		'XFCE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/xfce.png',
			'size' => '3.4Go',

			'links' => [
				[
                                        'name' => 'Mirror 1',
                                        'link' => 'https://iso.kaisenlinux.org/rolling/kaisenlinuxrolling1.5-amd64-XFCE.iso',
                                ],
				[
					'name' => 'Mirror 2',
					'link' => 'https://kaisen.lf.je/rolling/kaisenlinuxrolling1.5-amd64-XFCE.iso',
				],

			],

		],

		'LXDE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/lxde.png',
			'size' => '3.4Go',

			'links' => [
				[
                                        'name' => 'Mirror 1',
                                        'link' => 'https://iso.kaisenlinux.org/rolling/kaisenlinuxrolling1.5-amd64-LXDE.iso',
                                ],
				[
					'name' => 'Mirror 2',
					'link' => 'https://kaisen.lf.je/rolling/kaisenlinuxrolling1.5-amd64-LXDE.iso',
				],

			],

		],

		'System Rescue' => [

			'include' => 'No installer, live only',
			'img'	  => './img/downloads/sr.png',
			'size' => '2.2Go',

			'links' => [
				[
                                        'name' => 'Mirror 1',
                                        'link' => 'https://iso.kaisenlinux.org/rolling/kaisenlinux1.5-amd64-SR.iso',
                                ],
				[
					'name' => 'Mirror 2',
					'link' => 'https://kaisen.lf.je/rolling/kaisenlinux1.5-amd64-SR.iso',
				],

			],

		],






	];

?>

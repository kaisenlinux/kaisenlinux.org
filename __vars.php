<?php 


	$title = "Kaisen Linux | The distribution for professional IT";
	
	$description = "Kaisen Linux is a distribution dedicated for IT professional based on Debian GNU/Linux. Large tools are integrated for diagnostics, rescue system and networks, lab creation and many more!";

	$image = 'https://kaisenlinux.org/img/kaisen-social.jpg';
	$url = 'https://kaisenlinux.org';


	$release_version = 'Rolling 2.0';


	$links_download = [

		'MATE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/mate.png',
			'size' => '4.1Go',

			'links' => [
				[
                    'name' => 'Mirror 1',
                    'link' => 'https://iso.kaisenlinux.org/testing/kaisenlinuxrolling2.0-amd64-MATE.iso',
                ],
				[
					'name' => 'Mirror 2',
					'link' => 'https://iso.kaisenlinux.xyz/rolling/kaisenlinuxrolling2.0-amd64-MATE.iso',
				],

			],

		],

		'KDE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/kde.png',
			'size' => '4.5Go',

			'links' => [
				[
                    'name' => 'Mirror 1',
                    'link' => 'https://iso.kaisenlinux.org/testing/kaisenlinuxrolling2.0-amd64-KDE.iso',
                ],
				[
                    'name' => 'Mirror 2',
                    'link' => 'https://iso.kaisenlinux.xyz/rolling/kaisenlinuxrolling2.0-amd64-KDE.iso',
                ],

			],

		],

		'XFCE' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/xfce.png',
			'size' => '3.9Go',

			'links' => [
				[
                    'name' => 'Mirror 1',
                    'link' => 'https://iso.kaisenlinux.org/testing/kaisenlinuxrolling2.0-amd64-XFCE.iso',
                ],
				[
                    'name' => 'Mirror 2',
                    'link' => 'https://iso.kaisenlinux.xyz/rolling/kaisenlinuxrolling2.0-amd64-XFCE.iso',
                ],

			],

		],

		'LXQT' => [

			'include' => 'All tools included',
			'img'	  => './img/downloads/lxqt.png',
			'size' => '4.0Go',

			'links' => [
				[
                    'name' => 'Mirror 1',
                    'link' => 'https://iso.kaisenlinux.org/testing/kaisenlinuxrolling2.0-amd64-LXQT.iso',
                ],
				[
                    'name' => 'Mirror 2',
                    'link' => 'https://iso.kaisenlinux.xyz/rolling/kaisenlinuxrolling2.0-amd64-LXQT.iso',
                ],

			],

		],

		'System Rescue' => [

			'include' => 'No installer, live only',
			'img'	  => './img/downloads/sr.png',
			'size' => '2.3Go',

			'links' => [
				[
                    'name' => 'Mirror 1',
                    'link' => 'https://iso.kaisenlinux.org/testing/kaisenlinuxrolling2.0-amd64-SR.iso',
                ],
				[
                    'name' => 'Mirror 2',
                    'link' => 'https://iso.kaisenlinux.xyz/rolling/kaisenlinuxrolling2.0-amd64-SR.iso',
                ],

			],

		],

		'NETINST' => [

			'include' => 'Network required',
			'img'	  => './img/downloads/netinst.png',
			'size' => '391Mo',

			'links' => [
				[
                    'name' => 'Mirror 1',
                    'link' => 'https://iso.kaisenlinux.org/testing/kaisenlinuxrolling2.0-amd64-NETINST.iso',
                ],
				[
                    'name' => 'Mirror 2',
                    'link' => 'https://iso.kaisenlinux.xyz/rolling/kaisenlinuxrolling2.0-amd64-NETINST.iso',
                ],

			],

		],


	];

?>

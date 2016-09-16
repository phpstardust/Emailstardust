<?php

Configure::write(
    'Emailstardust',
    array(
		'from' => array(
			'name' => 'John Doe',
			'email' => 'mail@example.com'
		),
		'to' => 'mail@example.com',
		'subject' => 'Email by Emailstardust',
		'sentRedirect' => 'https://github.com/phpstardust',
		'title' => 'Emailstardust',
		'headerCover' => false,
		'headerCoverUrl' => '',
		'message' => 'This is a Emailstardust.',
		'fontSize' => '16px',
		'colorHeader' => '#336699',
		'colorTitle' => '#ffffff',
		'colorText' => '#999',
		'colorLink' => '#336699',
		'callToAction' => 'Click here',
		'callToActionUrl' => 'https://github.com/phpstardust',
		'callToActionBackgroundColor' => '#336699',
		'callToActionTextColor' => '#ffffff',
		'website' => 'https://github.com/phpstardust',
		'author' => 'PhpStarDust',
		'footer' => 'Sent by PhpStarDust, 1234 Yellow Brick Road, OZ, 99999',
		'unsubscribeUrl' => '#',
		'privacyUrl' => '#',
		'facebook' => '#',
		'googleplus' => '#',
		'instagram' => '#',
		'linkedin' => '#',
		'twitter' => '#',
		'youtube' => '#'
	)
);


?>

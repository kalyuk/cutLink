<?php

return [
	'basePath' => dirname(__FILE__),
	'runtimePath' => RUNTIME,
	'components' => [
		'db' => [
			'connectionString' => 'mysql:host=localhost;dbname=albatross',
			'username' => 'albatross',
			'password' => 'albatross',
			'charset' => 'utf8'
		],
		'urlManager' => [
			'urlFormat' => 'path',
			'rules' => [
				'/' => 'site/index',
				'/<key:\w+>' => 'site/go'
			],
		],
	],
	'language' => 'ru',
	'import' => [
		'application.models.*',
		'application.models.base.*'
	],

	'modules' => [
		'gii' => [
			'class' => 'system.gii.GiiModule',
			'password' => '123',
			'ipFilters' => ['*']
		],
	],
];
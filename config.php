<?php

$applicationPath = realpath('');

// HTTP
define('HTTP_SERVER',	'http://' . $_SERVER['HTTP_HOST']);
define('HTTPS_SERVER',	'https://' . $_SERVER['HTTP_HOST']);

// DIR
define('DIR_APPLICATION',	$applicationPath . '/catalog/');
define('DIR_SYSTEM',		$applicationPath . '/system/');
define('DIR_LANGUAGE',		$applicationPath . '/catalog/language/');
define('DIR_TEMPLATE',		$applicationPath . '/catalog/view/theme/');
define('DIR_CONFIG',		$applicationPath . '/system/config/');
define('DIR_IMAGE',			$applicationPath . '/image/');
define('DIR_CACHE',			$applicationPath . '/system/cache/');
define('DIR_DOWNLOAD',		$applicationPath . '/system/download/');
define('DIR_UPLOAD',		$applicationPath . '/system/upload/');
define('DIR_MODIFICATION',	$applicationPath . '/system/modification/');
define('DIR_LOGS',			$applicationPath . '/system/logs/');

// DB
define('DB_DRIVER',		'mysqli');
define('DB_HOSTNAME',	'localhost');
define('DB_USERNAME',	'petrivsky');
define('DB_PASSWORD',	'lkd54gfGK33-44s');
define('DB_DATABASE',	'shoes');
define('DB_PREFIX',		'');

<?php
$applicationPath = realpath('');

// HTTP
define('HTTP_SERVER',	'http://' . $_SERVER['HTTP_HOST'] . '/');
define('HTTPS_SERVER',	'https://' . $_SERVER['HTTP_HOST'] . '/');

// DIR
define('DIR_APPLICATION',	$applicationPath . '/catalog/');
define('DIR_SYSTEM',		$applicationPath . '/system/');
define('DIR_IMAGE',			$applicationPath . '/image/');
define('DIR_LANGUAGE',		$applicationPath . '/catalog/language/');
define('DIR_TEMPLATE',		$applicationPath . '/catalog/view/theme/');
define('DIR_CONFIG',		$applicationPath . '/system/config/');
define('DIR_CACHE',			$applicationPath . '/system/storage/cache/');
define('DIR_DOWNLOAD',		$applicationPath . '/system/storage/download/');
define('DIR_LOGS',			$applicationPath . '/system/storage/logs/');
define('DIR_MODIFICATION',	$applicationPath . '/system/storage/modification/');
define('DIR_UPLOAD',		$applicationPath . '/system/storage/upload/');

// DB
define('DB_DRIVER',		'mysqli');
define('DB_HOSTNAME',	'localhost');
define('DB_USERNAME',	'taras');
define('DB_PASSWORD',	'111111');
define('DB_DATABASE',	'shoes');
define('DB_PORT',		'3306');
define('DB_PREFIX',		'');

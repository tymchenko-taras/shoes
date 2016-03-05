<?php
$applicationPath = realpath('..');

// HTTP
define('HTTP_SERVER',	'http://'. $_SERVER['HTTP_HOST'] .'/admin/');
define('HTTP_CATALOG',	'http://'. $_SERVER['HTTP_HOST'] .'/');
define('HTTPS_SERVER',	'http://'. $_SERVER['HTTP_HOST'] .'/admin/');
define('HTTPS_CATALOG',	'http://'. $_SERVER['HTTP_HOST'] .'/');

// DIR
define('DIR_APPLICATION',	$applicationPath . '/admin/');
define('DIR_SYSTEM',		$applicationPath . '/system/');
define('DIR_IMAGE',			$applicationPath . '/image/');
define('DIR_LANGUAGE',		$applicationPath . '/admin/language/');
define('DIR_TEMPLATE',		$applicationPath . '/admin/view/template/');
define('DIR_CONFIG',		$applicationPath . '/system/config/');
define('DIR_CACHE',			$applicationPath . '/system/storage/cache/');
define('DIR_DOWNLOAD',		$applicationPath . '/system/storage/download/');
define('DIR_LOGS',			$applicationPath . '/system/storage/logs/');
define('DIR_MODIFICATION',	$applicationPath . '/system/storage/modification/');
define('DIR_UPLOAD',		$applicationPath . '/system/storage/upload/');
define('DIR_CATALOG',		$applicationPath . '/catalog/');

// DB
define('DB_DRIVER',		'mysqli');
define('DB_HOSTNAME',	'localhost');
define('DB_USERNAME',	'taras');
define('DB_PASSWORD',	'111111');
define('DB_DATABASE',	'shoes');
define('DB_PORT',		'3306');
define('DB_PREFIX',		'');

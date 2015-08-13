<?php

// This file must be included to work
if (count(get_included_files()) == 1) {
    require('deny.php');
    exit;
}

@set_time_limit(0);
ini_alter('memory_limit', '1024M');
if (ob_get_level())
    ob_end_clean();
ob_implicit_flush(true);
clearstatcache();
error_reporting(6135);
// $nn = "\r\n";
//$fromaddr = 'RapidLeech';
//$dev_name = 'Development Stage';
//$rev_num = '43';
//$plusrar_v = '4.1';
$PHP_SELF = $_SERVER['SCRIPT_NAME'];
define('RAPIDLEECH', 'yes');
define('ROOT_DIR', realpath('./'));
define('PATH_SPLITTER', ((strpos(ROOT_DIR, '\\') !== false) ? '\\' : '/'));
define('HOST_DIR', 'hosts/');
define('CLASS_DIR', 'classes/');
define('CONFIG_DIR', 'configs/');
require_once(CONFIG_DIR . 'setup.php');
header('X-Frame-Options: SAMEORIGIN');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
header('Cache-Control: max-age=0, no-store, no-cache, must-revalidate, proxy-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
require_once(CLASS_DIR . 'other.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/header.php';
?>
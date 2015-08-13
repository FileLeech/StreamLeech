<?php

$PHP_SELF = $_SERVER['SCRIPT_NAME'];
if (!defined('RAPIDLEECH'))
    define('RAPIDLEECH', 'yes');
if (!defined('CONFIG_DIR'))
    define('CONFIG_DIR', 'configs/');

if (is_file(CONFIG_DIR . 'config.php')) {
    require_once(CONFIG_DIR . 'config.php');
    if (count($options) == count($default_options)) {
        unset($default_options);
        return;
    }
}

// Avoid setup page to be cached
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . 'GMT');
header('Cache-Control: max-age=0, no-store, no-cache, must-revalidate, proxy-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');
require_once('classes/other.php');
?>
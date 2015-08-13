<?php

/*
 * Este proyecto es privado y fue programado
 * por Jose Luis Coyotzo Ipatzi, si estas
 * interesado en este proyecto contactarme
 * en itzapeke@hotmail.es o coil811122@icloud.com
 */
//$_POST['link'] = 'http://ma.digitalplayground.com/movies/info/29642/prey-for-the-dying/';
$_POST['link'] = 'https://www.youtube.com/watch?v=My2FRPA3Gf8';
//$_POST['link']='https://my.mail.ru/mail/alealex77/video/_myvideo/22.html';
$_GET = $_POST;
require_once('pages/rl_init.php');
require_once(CLASS_DIR . 'cookie.php');
if (!@file_exists(HOST_DIR . 'download/hosts.php')) {
    html_error("Error");
}

require_once(HOST_DIR . 'download/hosts.php');
$LINK = !empty($_GET['link']) ? trim($_GET['link']) : false;
if ($LINK != '') {
    if (stripos($LINK, '://') === false || (strtolower(substr($LINK, 0, 7)) != 'http://' && strtolower(substr($LINK, 0, 6)) != 'ftp://' && strtolower(substr($LINK, 0, 6)) != 'ssl://' && strtolower(substr($LINK, 0, 8)) != 'https://')) {
        $LINK = 'http://' . $LINK;
    }
    $Url = parse_url($LINK);
    $Url['scheme'] = strtolower($Url['scheme']);

    $Url['path'] = (empty($Url['path'])) ? '/' : str_replace('%7C', '|', $Url['path']);
    $LINK = rebuild_url($Url);
    if (!in_array($Url['scheme'], array('http', 'https', 'ftp'))) {
        html_error("metodo sin soporte");
    }
    foreach ($host as $site => $file) {
        if (host_matches($site, $Url['host'])) {
            require_once(CLASS_DIR . 'http.php');
            require_once(HOST_DIR . 'DownloadClass.php');
            require_once(HOST_DIR . "download/$file");
            $class = substr($file, 0, -4);
            $firstchar = substr($file, 0, 1);
            if ($firstchar > 0) {
                $class = "d$class";
            }
            if (class_exists($class)) {
                $hostClass = new $class();
                $hostClass->Download($LINK);
            } else {
                html_error("No contamos con soporte para este servidor: " . str_replace("_", ".", $class));
            }
        } else {
            html_error("No contamos con soporte para este servidor: " . $Url['host']);
        }
    }
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/pages/footer.php';

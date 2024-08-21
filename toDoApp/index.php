<?php
session_start();
require __DIR__ . '/config/config.php';

if(DEV_MODE) {
    error_reporting(E_ALL);
    ini_set('error_reporting', true);
} else {
    error_reporting(0);
    ini_set('error_reporting', false);
}

// RELATED FOLDERS
foreach (glob(BASEDIR . '/helpers/*.php') as $file) {
    require $file;
}

// GET ROUTE //
$config['route'][0] = 'home';
$config['lang'] = 'tr';

if (isset($_GET['route'])) {
    $desen = '@(?<lang>\b[a-z]{2}\b)?/?(?<route>.+)/?@';
    preg_match($desen, $_GET['route'], $result);
}

if (isset($result['route'])) {
    $config['route'] = explode('/', $result['route']);
}
// LANGUAGE //
if (isset($result['lang'])) {
    if (file_exists(__DIR__ . '/language/' . $result['lang'] . '.php')) {
        $config['lang'] = $result['lang'];
    } else {
        $config['lang'] = 'tr';
    }
}

require BASEDIR . '/language/' . $config['lang'] . '.php';

// IF PAGE EXIST
if (file_exists(BASEDIR . '/Controller/' . $config['route'][0] . '.php')) {
    require BASEDIR . '/Controller/' . $config['route'][0] . '.php';
} else {
    echo 'Sayfa bulunamadı!';
}

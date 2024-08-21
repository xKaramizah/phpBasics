<?php

function route($index)
{
    global $config;
    return $config['route'][$index] ?? false;
}

function view($viewName, $pageData = [])
{
    $data = $pageData;
    if (file_exists(BASEDIR . '/View/' . $viewName . '.php')) {
        require BASEDIR . '/View/' . $viewName . '.php';

    }
    return false;
}

function assets($assetName)
{
    if (file_exists(BASEDIR . '/public/' . $assetName)) {
        return URL . 'public/' . $assetName;
    }
    return false;
}

function lang($text)
{
    global $lang;
    if (isset($lang[$text])) {
        return $lang[$text];
    }
    return $text;
}

function add_session($index, $value)
{
    $_SESSION[$index] = $value;
}

function get_session($index)
{
    if (isset($_SESSION[$index])) {
        return $_SESSION[$index];
    }
    return false;
}

function post($index)
{
    if (isset($_POST[$index])) {
        return htmlspecialchars(trim($_POST[$index]));
    }
    return false;
}

function get($index)
{
    if (isset($_GET[$index])) {
        return htmlspecialchars(trim($_GET[$index]));
    }
    return false;
}

function get_cookie($index)
{
    if (isset($_COOKIE[$index])) {
        return trim($_COOKIE[$index]);
    }
    return false;
}

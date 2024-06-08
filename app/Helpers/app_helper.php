<?php

/** FOLDER AdminLTE */
function path_alte()
{
    return (base_url() . "/AdminLTE");
}

/** LOAD CSS & JS */
function loadCSS($pathFileCSS, $absPath = null)
{
    if ($absPath == 'appcss') {
        return '<link rel="stylesheet" href="' . base_url() . '/apps/css/' . $pathFileCSS . '"/>' . PHP_EOL;
    } else if ($absPath == 'appplugins') {
        return '<link rel="stylesheet" href="' . base_url() . '/apps/plugins/' . $pathFileCSS . '"/>' . PHP_EOL;
    } else if ($absPath == 'adminlte_plugins') {
        return '<link rel="stylesheet" href="' . path_alte() . '/plugins/' . $pathFileCSS . '"/>' . PHP_EOL;
    } else {
        return '<link rel="stylesheet" href="' . $pathFileCSS . '"/>' . PHP_EOL;
    }
}

function loadJS($pathFileJS, $absPath = null)
{
    if ($absPath == 'appjs') {
        return '<script src="' . base_url() . '/apps/js/' . $pathFileJS . '"></script>' . PHP_EOL;
    } else if ($absPath == 'appplugins') {
        return '<script src="' . base_url() . '/apps/plugins/' . $pathFileJS . '"></script>' . PHP_EOL;
    } else if ($absPath == 'adminlte_plugins') {
        return '<script src="' . path_alte() . '/plugins/' . $pathFileJS . '"></script>' . PHP_EOL;
    } else {
        return '<script src="' . $pathFileJS . '"></script>' . PHP_EOL;
    }
}

function checkAndCreatePath($path)
{
    $status = false;
    if (!file_exists($path)) {
        $status = mkdir($path, 0755, TRUE);
    } else {
        $status = true;
    }
    return $status;
}

function checkUploadImgIfExist($imageUrl)
{
    $retPath = "";
    if (substr($imageUrl, -1) !== '/') {
        if (file_exists($imageUrl)) {
            $retPath = $imageUrl;
        } else {
            $retPath = "uploads/noimage.png";
        }
    } else {
        $retPath = "uploads/noimage.png";
    }
    return $retPath;
}

<?php
use \Illuminate\Support\Facades\Session;

function formatPrice($price) {
    return number_format((float)$price, 2, '.', '');
}

function formatTimestamps($timestamp) {
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->format('d.m.Y');
}

function makeFilenameURLFriendly($filename, $replacement = '-') {
    return preg_replace('/[^a-z.0-9]+/i', $replacement, iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $filename));
}

function makeStringURLFriendly($string, $replacement = '-') {
    return preg_replace('/[^a-z0-9]+/i', $replacement, iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $string));
}

function parseUrl($url) {
    $parsed = parse_url($url);
    if (empty($parsed['scheme'])) {
        return $urlStr = 'http://' . ltrim($url, '/');
    }
    return $url;
}

function createAlert($type, $message, $description = null) {
    Session::flash('alert-type', $type);
    Session::flash('alert-message', $message);
    if($description != null) Session::flash('alert-description',$description);
}

function checkFileDimensions($min_width, $min_height, $path) {
    list($originalWidth, $originalHeight, $tpe, $attr) = getimagesize($path);
    if($min_width > $originalWidth || $min_height > $originalHeight) {
        return false;
    }
    return true;
}

function deleteImage($filename, $path = '/images/uploaded/') {
    if(!empty($filename)) {
        if(file_exists(public_path() . $path . $filename))
            unlink(public_path() . $path . $filename);
        if(file_exists(public_path() . '/images/uploaded/mini/' . $filename))
            unlink(public_path() . '/images/uploaded/mini/' . $filename);
        return true;
    } return false;
}

function getIcon($id) {
    $icon = 'ERROR ICON NOT DEFINED';
    switch ($id) {
        case '1':
            $icon = '<i class="fa fa-check available"></i>';
            break;
        case '2':
            $icon = '<i class="fa fa-check available"></i>';
            break;
        case '6':
            $icon = '<i class="fa fa-check small-quantity"></i>';
            break;
        case '3':
            $icon = '<i class="fa fa-times unavailable"></i>';
            break;
        case '4':
            $icon = '<i class="fa fa-times unavailable"></i>';
            break;
        case '5':
            $icon = '<i class="fa fa-clock-o on-order"></i>';
            break;
        default:
            $icon = '<i class="fa fa-check available"></i>';
            break;
    }
    return $icon;
}

function getAvailabilityIcon($shop_product_availability, $product_id, $shop_id, $availability_id = 0) {

    $shop_product_availability = $shop_product_availability->where('product_id', $product_id)->where('shop_id', $shop_id)->first();

    if($shop_product_availability) {
        $availability = \App\ProductAvailability::where('id', $shop_product_availability->availability)->first();
        $icon = getIcon($availability->id);
    } elseif($availability_id != 0) {
        $icon = getIcon($availability_id);
    } else {
        $icon = '-';
    }

    return $icon;
}

function getProductDisplay($cookie) {
    $productDisplay = null;

    if($cookie->has('productDisplay'))
        $productDisplay = $_COOKIE['productDisplay'];
    else
        $productDisplay = 'block';

    return $productDisplay;
}

function getProductsPerPage($cookie) {
    $productsPerPage = null;

    if($cookie->has('productsPerPage'))
        $productsPerPage = $_COOKIE['productsPerPage'];
    else
        $productsPerPage = 24;

    return $productsPerPage;
}

function isSpam($message) {
    foreach (['Б', 'б', 'Г', 'г', 'д', 'Д', 'ж', 'Ж', 'л', 'Л', 'porn', 'sex', 'horny', 'sexy', 'sexi'] as $spamVariable) {
        if(str_contains($message, $spamVariable))
            return true;
    }

    if((str_contains($message, 'http://') && str_contains($message, 'http://')) && (
        !str_contains($message, 'http://axis.sk') &&
        !str_contains($message, 'https://axis.sk') &&
        !str_contains($message, 'http://www.axis.sk') &&
        !str_contains($message, 'https://www.axis.sk')
        ))
        return true;

    return false;
}
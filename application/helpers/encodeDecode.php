<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function encodeDecode64($string, $tipo) {
    switch ($tipo) {
        case 'encode':
            $base_64 = base64_encode($string);
            $data_url = rtrim($base_64, '=');
            break;

        case 'decode':
            $base_64 = $string . str_repeat('=', strlen($string) % 4);
            $data_url = base64_decode($base_64);
            break;

        default:
            $data_url = "error: tipo no definido correctamente";
            break;
    }

    return $data_url;
}

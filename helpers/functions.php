<?php

function isCurrentPage($url)
{

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    return ($uri === $url) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
}

if (!function_exists('dd')) {
    function dd()
    {
        echo '<pre>';
        array_map(function ($x) {
            var_dump($x);
        }, func_get_args());
        die;
    }
}

if (!function_exists('abort')) {
    function abort($code = 404)
    {
        http_response_code($code);
        require "views/{$code}.php";
        exit;
    }
}

<?php
require "../vendor/autoload.php";

$urls = [
    "http://laravelacademy.org",
    "http://laravel-academy.org",
    "https://packagist.org"
];

$scanner =  new \gaohua\UrlScanner\Scanner($urls);
print_r($scanner->getInvalidUrls());
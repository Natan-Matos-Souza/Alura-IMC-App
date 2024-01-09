<?php

require __DIR__ . '/../../vendor/autoload.php';

define('PATH_TO_PAGES', __DIR__ . '/../pages');

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

$path = $page ? PATH_TO_PAGES . "/$page.php" : PATH_TO_PAGES . "/home.php";

findPage($path);
<?php

function findPage(string $path): void
{
    file_exists($path) ? require $path : require '../pages/404.php';
}
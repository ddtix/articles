<?php
//require __DIR__ . '/../vendor/autoload.php';

// подгрузка неопубликованных пакетов
spl_autoload_register(function ($className) {
    $parts = explode('\\', $className);
    $fileName = array_pop($parts);
    $folders = array_map('strtolower', $parts);
    $filePath = __DIR__ . '/../vendor/' . implode('/', $folders) . '/src/' . $fileName . '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

use Ddtix\Dbconn\DB;
use Ddtix\Envloader\ENV;
use Ddtix\Router\Route;

ENV::load(__DIR__);

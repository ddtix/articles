<?php
require __DIR__ . '/../vendor/autoload.php';

use Ddtix\Envloader\ENV;
use Ddtix\Router\Route;

ENV::load(__DIR__);
Route::load();

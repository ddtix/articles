<?php

namespace Controllers;

use Ddtix\Dbconn\DB;
use Services\Service;

class Test
{
    public static function index(): string
    {
        return Service::index();
    }
}

<?php

namespace Controllers;

use Ddtix\Dbconn\DB;
use Services\Service\MyService;

class Test
{
    public static function index(): string
    {
        return MyService::index();
    }
}

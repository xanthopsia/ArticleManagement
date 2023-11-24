<?php

declare(strict_types=1);

namespace App\Controllers;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;

abstract class BaseController
{
    protected Connection $database;

    public function __construct()
    {
        $connectionParams = [
            'dbname' => $_ENV["DB_DATABASE"],
            'user' => $_ENV["DB_USERNAME"],
            'password' => $_ENV["DB_PASSWORD"],
            'host' => $_ENV["DB_HOSTNAME"],
            'driver' => $_ENV["DB_DRIVER"]
        ];

        $this->database = DriverManager::getConnection($connectionParams);
    }
}
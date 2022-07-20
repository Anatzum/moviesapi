<?php

use Phalcon\Config;

return new Config([
    'database' => [
        'adapter' => 'mysql',
        'host' => '127.0.0.1',
        'username' => getenv("DB_USERNAME"),
        'password' => getenv("DB_PASSWORD"),
        'dbname' => getenv("DB_DBNAME"),
        'charset' => 'utf8',
    ],
    'application' => [
        'logInDb' => true,
        'no-auto-increment' => true,
        'skip-ref-schema' => true,
        'skip-foreign-checks' => true,
        'migrationsDir' => 'app/migrations',
        'modelsDir' => 'app/models',
        'viewsDir' => 'app/views',
        'migrationsTsBased' => false, // true - Use TIMESTAMP as version name, false - use versions
        'exportDataFromTables' => [
            // Tables names
            // Attention! It will export data every new migration
        ],
    ],
]);

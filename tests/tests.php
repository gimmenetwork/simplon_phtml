<?php

use Simplon\Phtml\Phtml;

require __DIR__ . '/../vendor/autoload.php';

echo Phtml::render(__DIR__ . '/template.phtml', [
    'world' => 'World',
    'list'  => [
        [
            'name' => 'Johnny',
        ],
        [
            'name' => 'Sam',
        ],
    ],
]);
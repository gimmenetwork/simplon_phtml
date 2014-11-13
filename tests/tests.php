<?php

require __DIR__ . '/../vendor/autoload.php';

echo \Simplon\Phtml\Phtml::render(
    __DIR__ . '/template',
    [
        'world' => 'World',
        'list' => [
            [
                'name' => 'Johnny',
            ],
            [
                'name' => 'Sam',
            ],
        ],
    ]
);
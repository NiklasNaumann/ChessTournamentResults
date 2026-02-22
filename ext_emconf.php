<?php

declare(strict_types=1);

$EM_CONF[$_EXTKEY] = [
    'title' => 'Chess Tournament Results',
    'description' => 'Manages chess tournaments with start list, round standings, pairings and final standings.',
    'category' => 'plugin',
    'author' => 'Codex',
    'author_email' => '',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
    ],
];

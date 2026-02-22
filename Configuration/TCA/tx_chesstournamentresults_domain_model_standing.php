<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'Standing',
        'label' => 'player_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'hideTable' => true,
        'iconfile' => 'EXT:chess_tournament_results/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, position, player_name, points, buchholz'],
    ],
    'columns' => [
        'hidden' => ['config' => ['type' => 'check']],
        'round' => ['config' => ['type' => 'passthrough']],
        'position' => ['config' => ['type' => 'number', 'required' => true]],
        'player_name' => ['config' => ['type' => 'input', 'required' => true]],
        'points' => ['config' => ['type' => 'number', 'format' => 'decimal', 'default' => 0]],
        'buchholz' => ['config' => ['type' => 'number', 'format' => 'decimal', 'default' => 0]],
    ],
];

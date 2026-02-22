<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'Player',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'searchFields' => 'name,club',
        'hideTable' => true,
        'iconfile' => 'EXT:chess_tournament_results/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, name, club, rating, starting_rank'],
    ],
    'columns' => [
        'hidden' => ['config' => ['type' => 'check']],
        'tournament' => ['config' => ['type' => 'passthrough']],
        'name' => ['config' => ['type' => 'input', 'required' => true]],
        'club' => ['config' => ['type' => 'input']],
        'rating' => ['config' => ['type' => 'number', 'default' => 0]],
        'starting_rank' => ['config' => ['type' => 'number', 'default' => 0]],
    ],
];

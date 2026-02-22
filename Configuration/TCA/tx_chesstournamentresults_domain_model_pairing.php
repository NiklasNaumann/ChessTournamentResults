<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'Pairing',
        'label' => 'board',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'hideTable' => true,
        'iconfile' => 'EXT:chess_tournament_results/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, board, white_player, black_player, result'],
    ],
    'columns' => [
        'hidden' => ['config' => ['type' => 'check']],
        'round' => ['config' => ['type' => 'passthrough']],
        'board' => ['config' => ['type' => 'number', 'required' => true]],
        'white_player' => ['config' => ['type' => 'input', 'required' => true]],
        'black_player' => ['config' => ['type' => 'input', 'required' => true]],
        'result' => ['config' => ['type' => 'input']],
    ],
];

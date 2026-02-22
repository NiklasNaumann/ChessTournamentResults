<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'Tournament',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'searchFields' => 'title,location,description',
        'iconfile' => 'EXT:chess_tournament_results/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, title, location, start_date, end_date, description, players, rounds'],
    ],
    'columns' => [
        'hidden' => ['config' => ['type' => 'check']],
        'title' => ['config' => ['type' => 'input', 'required' => true]],
        'location' => ['config' => ['type' => 'input']],
        'start_date' => ['config' => ['type' => 'datetime']],
        'end_date' => ['config' => ['type' => 'datetime']],
        'description' => ['config' => ['type' => 'text']],
        'players' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_chesstournamentresults_domain_model_player',
                'foreign_field' => 'tournament',
                'appearance' => ['collapseAll' => false],
            ],
        ],
        'rounds' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_chesstournamentresults_domain_model_round',
                'foreign_field' => 'tournament',
                'appearance' => ['collapseAll' => false],
            ],
        ],
    ],
];

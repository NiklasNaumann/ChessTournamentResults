<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'Round',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'searchFields' => 'name',
        'hideTable' => true,
        'iconfile' => 'EXT:chess_tournament_results/Resources/Public/Icons/Extension.svg',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, round_number, name, source_reference, pairings, standings'],
    ],
    'columns' => [
        'hidden' => ['config' => ['type' => 'check']],
        'tournament' => ['config' => ['type' => 'passthrough']],
        'round_number' => ['config' => ['type' => 'number', 'required' => true]],
        'name' => ['config' => ['type' => 'input']],
        'source_reference' => ['config' => ['type' => 'input', 'placeholder' => 'z.B. Importdatei Runde1.csv']],
        'pairings' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_chesstournamentresults_domain_model_pairing',
                'foreign_field' => 'round',
                'appearance' => ['collapseAll' => false],
            ],
        ],
        'standings' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_chesstournamentresults_domain_model_standing',
                'foreign_field' => 'round',
                'appearance' => ['collapseAll' => false],
            ],
        ],
    ],
];

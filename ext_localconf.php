<?php

declare(strict_types=1);

use ChessTournamentResults\Controller\TournamentController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (): void {
    ExtensionUtility::configurePlugin(
        'ChessTournamentResults',
        'Tournament',
        [
            TournamentController::class => 'list,show,startList,roundRanking,roundPairings,finalRanking',
        ],
        [
            TournamentController::class => '',
        ]
    );
})();

<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (): void {
    ExtensionManagementUtility::addStaticFile(
        'chess_tournament_results',
        'Configuration/TypoScript',
        'Chess Tournament Results'
    );

    ExtensionManagementUtility::allowTableOnStandardPages('tx_chesstournamentresults_domain_model_tournament');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_chesstournamentresults_domain_model_player');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_chesstournamentresults_domain_model_round');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_chesstournamentresults_domain_model_pairing');
    ExtensionManagementUtility::allowTableOnStandardPages('tx_chesstournamentresults_domain_model_standing');
})();

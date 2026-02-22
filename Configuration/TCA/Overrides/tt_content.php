<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (): void {
    ExtensionUtility::registerPlugin(
        'ChessTournamentResults',
        'Tournament',
        'Chess Tournament Results'
    );
})();

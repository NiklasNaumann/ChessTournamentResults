<?php

declare(strict_types=1);

namespace ChessTournamentResults\Controller;

use ChessTournamentResults\Domain\Model\Round;
use ChessTournamentResults\Domain\Model\Tournament;
use ChessTournamentResults\Domain\Repository\TournamentRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TournamentController extends ActionController
{
    public function __construct(
        protected readonly TournamentRepository $tournamentRepository
    ) {
    }

    public function listAction(): void
    {
        $this->view->assign('tournaments', $this->tournamentRepository->findAll());
    }

    public function showAction(Tournament $tournament): void
    {
        $this->view->assignMultiple([
            'tournament' => $tournament,
            'rounds' => $this->sortedRounds($tournament),
        ]);
    }

    public function startListAction(Tournament $tournament): void
    {
        $players = $tournament->getPlayers()->toArray();
        usort($players, static fn ($a, $b) => $a->getStartingRank() <=> $b->getStartingRank());

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'players' => $players,
        ]);
    }

    public function roundRankingAction(Tournament $tournament, ?Round $round = null): void
    {
        $rounds = $this->sortedRounds($tournament);
        $activeRound = $round ?? ($rounds[array_key_last($rounds)] ?? null);

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'rounds' => $rounds,
            'activeRound' => $activeRound,
            'standings' => $activeRound?->getStandings(),
        ]);
    }

    public function roundPairingsAction(Tournament $tournament, ?Round $round = null): void
    {
        $rounds = $this->sortedRounds($tournament);
        $activeRound = $round ?? ($rounds[array_key_last($rounds)] ?? null);

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'rounds' => $rounds,
            'activeRound' => $activeRound,
            'pairings' => $activeRound?->getPairings(),
        ]);
    }

    public function finalRankingAction(Tournament $tournament): void
    {
        $rounds = $this->sortedRounds($tournament);
        $lastRound = $rounds[array_key_last($rounds)] ?? null;

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'lastRound' => $lastRound,
            'standings' => $lastRound?->getStandings(),
        ]);
    }

    /**
     * @return array<int,Round>
     */
    private function sortedRounds(Tournament $tournament): array
    {
        $rounds = $tournament->getRounds()->toArray();
        usort($rounds, static fn (Round $a, Round $b) => $a->getRoundNumber() <=> $b->getRoundNumber());

        return $rounds;
    }
}

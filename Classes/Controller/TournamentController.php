<?php

declare(strict_types=1);

namespace ChessTournamentResults\Controller;

use ChessTournamentResults\Domain\Model\Round;
use ChessTournamentResults\Domain\Model\Tournament;
use ChessTournamentResults\Domain\Repository\TournamentRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class TournamentController extends ActionController
{
    public function __construct(
        protected readonly TournamentRepository $tournamentRepository
    ) {
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('tournaments', $this->tournamentRepository->findAll());

        return $this->htmlResponse();
    }

    public function showAction(Tournament $tournament): ResponseInterface
    {
        $this->view->assignMultiple([
            'tournament' => $tournament,
            'rounds' => $this->sortedRounds($tournament),
        ]);

        return $this->htmlResponse();
    }

    public function startListAction(Tournament $tournament): ResponseInterface
    {
        $players = $tournament->getPlayers()->toArray();
        usort($players, static fn ($a, $b) => $a->getStartingRank() <=> $b->getStartingRank());

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'players' => $players,
        ]);

        return $this->htmlResponse();
    }

    public function roundRankingAction(Tournament $tournament, ?Round $round = null): ResponseInterface
    {
        $rounds = $this->sortedRounds($tournament);
        $activeRound = $round ?? ($rounds[array_key_last($rounds)] ?? null);

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'rounds' => $rounds,
            'activeRound' => $activeRound,
            'standings' => $activeRound?->getStandings(),
        ]);

        return $this->htmlResponse();
    }

    public function roundPairingsAction(Tournament $tournament, ?Round $round = null): ResponseInterface
    {
        $rounds = $this->sortedRounds($tournament);
        $activeRound = $round ?? ($rounds[array_key_last($rounds)] ?? null);

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'rounds' => $rounds,
            'activeRound' => $activeRound,
            'pairings' => $activeRound?->getPairings(),
        ]);

        return $this->htmlResponse();
    }

    public function finalRankingAction(Tournament $tournament): ResponseInterface
    {
        $rounds = $this->sortedRounds($tournament);
        $lastRound = $rounds[array_key_last($rounds)] ?? null;

        $this->view->assignMultiple([
            'tournament' => $tournament,
            'lastRound' => $lastRound,
            'standings' => $lastRound?->getStandings(),
        ]);

        return $this->htmlResponse();
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

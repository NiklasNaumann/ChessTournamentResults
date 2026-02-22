<?php

declare(strict_types=1);

namespace ChessTournamentResults\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Player extends AbstractEntity
{
    protected string $name = '';

    protected int $startingRank = 0;

    protected int $rating = 0;

    protected string $club = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStartingRank(): int
    {
        return $this->startingRank;
    }

    public function setStartingRank(int $startingRank): void
    {
        $this->startingRank = $startingRank;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getClub(): string
    {
        return $this->club;
    }

    public function setClub(string $club): void
    {
        $this->club = $club;
    }
}

<?php

declare(strict_types=1);

namespace ChessTournamentResults\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Standing extends AbstractEntity
{
    protected int $position = 0;

    protected string $playerName = '';

    protected float $points = 0.0;

    protected float $buchholz = 0.0;

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    public function setPlayerName(string $playerName): void
    {
        $this->playerName = $playerName;
    }

    public function getPoints(): float
    {
        return $this->points;
    }

    public function setPoints(float $points): void
    {
        $this->points = $points;
    }

    public function getBuchholz(): float
    {
        return $this->buchholz;
    }

    public function setBuchholz(float $buchholz): void
    {
        $this->buchholz = $buchholz;
    }
}

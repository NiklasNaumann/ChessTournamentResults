<?php

declare(strict_types=1);

namespace ChessTournamentResults\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Pairing extends AbstractEntity
{
    protected int $board = 1;

    protected string $whitePlayer = '';

    protected string $blackPlayer = '';

    protected string $result = '';

    public function getBoard(): int
    {
        return $this->board;
    }

    public function setBoard(int $board): void
    {
        $this->board = $board;
    }

    public function getWhitePlayer(): string
    {
        return $this->whitePlayer;
    }

    public function setWhitePlayer(string $whitePlayer): void
    {
        $this->whitePlayer = $whitePlayer;
    }

    public function getBlackPlayer(): string
    {
        return $this->blackPlayer;
    }

    public function setBlackPlayer(string $blackPlayer): void
    {
        $this->blackPlayer = $blackPlayer;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): void
    {
        $this->result = $result;
    }
}

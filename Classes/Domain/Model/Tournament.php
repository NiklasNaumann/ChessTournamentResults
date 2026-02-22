<?php

declare(strict_types=1);

namespace ChessTournamentResults\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Tournament extends AbstractEntity
{
    protected string $title = '';

    protected string $location = '';

    protected ?\DateTimeImmutable $startDate = null;

    protected ?\DateTimeImmutable $endDate = null;

    protected string $description = '';

    /**
     * @var ObjectStorage<Player>
     */
    protected ObjectStorage $players;

    /**
     * @var ObjectStorage<Round>
     */
    protected ObjectStorage $rounds;

    public function __construct()
    {
        $this->players = new ObjectStorage();
        $this->rounds = new ObjectStorage();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function getStartDate(): ?\DateTimeImmutable
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeImmutable $startDate): void
    {
        $this->startDate = $startDate;
    }

    public function getEndDate(): ?\DateTimeImmutable
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeImmutable $endDate): void
    {
        $this->endDate = $endDate;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return ObjectStorage<Player>
     */
    public function getPlayers(): ObjectStorage
    {
        return $this->players;
    }

    /**
     * @return ObjectStorage<Round>
     */
    public function getRounds(): ObjectStorage
    {
        return $this->rounds;
    }
}

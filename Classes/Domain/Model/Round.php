<?php

declare(strict_types=1);

namespace ChessTournamentResults\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Round extends AbstractEntity
{
    protected int $roundNumber = 1;

    protected string $name = '';

    protected string $sourceReference = '';

    /**
     * @var ObjectStorage<Pairing>
     */
    protected ObjectStorage $pairings;

    /**
     * @var ObjectStorage<Standing>
     */
    protected ObjectStorage $standings;

    public function __construct()
    {
        $this->pairings = new ObjectStorage();
        $this->standings = new ObjectStorage();
    }

    public function getRoundNumber(): int
    {
        return $this->roundNumber;
    }

    public function setRoundNumber(int $roundNumber): void
    {
        $this->roundNumber = $roundNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSourceReference(): string
    {
        return $this->sourceReference;
    }

    public function setSourceReference(string $sourceReference): void
    {
        $this->sourceReference = $sourceReference;
    }

    /**
     * @return ObjectStorage<Pairing>
     */
    public function getPairings(): ObjectStorage
    {
        return $this->pairings;
    }

    /**
     * @return ObjectStorage<Standing>
     */
    public function getStandings(): ObjectStorage
    {
        return $this->standings;
    }
}

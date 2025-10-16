<?php

namespace Sport;

class Club {
    private int $idClub;
    private string $nomClub;
    private int $nbPoints;
    private Array $lesSports;

    public function __construct(int $idClub, string $nomClub, int $nbPoints) {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    public function getIdClub(): int {
        return $this->idClub;
    }

    public function getNomClub (): string{
        return $this->nomClub;
    }

    public function getLesSports(): Array{
        return $this->lesSports;
    }

    public function getnbPoints(): int {
        return $this->nbPoints;
    }

    public function ajouterSport(Sport $unSport): void {
        $this->lesSports[] = $unSport;
    }

    public function compareTo(Club $unClub): int {
        return $this->nbPoints <=> $unClub->getnbPoints();
    }
}
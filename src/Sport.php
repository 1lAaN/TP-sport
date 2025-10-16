<?php

namespace Sport;
use Sport\Club;

class Sport {
    private string $nomSport;
    private int $nbJoueurs;

    public function __construct(string $unNomSport, int $nbJoueurs) {
        $this->nomSport = $unNomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    public function getNomSport(): string {
        return $this->nomSport;
    }

    public function getDescription(): string {
        return "Sport: " . $this->nomSport . ", Nombre de joueurs: " . $this->nbJoueurs;
    }

    public function getNbJoueurs(): int {
        return $this->nbJoueurs;
    }
}
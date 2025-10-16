<?php

namespace Sport;
use Sport\Club;

class SportRelais extends Sport {
    private int $distance;

    public function __construct(string $unNom, int $unNbJoueur, int $uneDistance){
        parent::__construct($unNom, $unNbJoueur);
        $this->distance = $uneDistance;
    }

    public function getDistance(): int {
        return $this->distance;
    }

    public function getDescription(): string {
        return "Nom: " . $this->getNomSport() . "Nb" . $this->getNbJoueurs() . " Distance: " . $this->getDistance();
    }
}
<?php

namespace Sport\PSG;
use Sport\Club;

class SportRelais extends Sport {
    private int $distance;

    public function __construct(string $unNom, int $unNbJoueur, int $uneDistance){
        parent::__construct($unNom, $unNbJoueur);
        $this->distance = $uneDistance;
    }

    public function getdescription (): string {
        return parent::Getdescription() . " et la distance est de " . $this->distance . " mètres.";
    }

    public function getDistance(): int {
        return $this->distance;
    }
}
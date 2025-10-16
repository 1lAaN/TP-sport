<?php

namespace Sport\PSG;
use Sport\Club;

class SportBallon extends Sport {
    private int $largeur;
    private int $longueur;

    public function __construct(string $unNom, int $unNbJoueurs, int $uneLargeur, int $uneLongueur) {
        parent:: __construct($unNom, $unNbJoueurs);
        $this->largeur = $uneLargeur;
        $this->longueur = $uneLongueur;
    }

    public function getLargeur(): int{
        return $this->largeur;
    }

    public function getLongueur(): int{
        return $this->longueur;
    }

    public function getDescription(): string{
        return $this->description;
    }





} 
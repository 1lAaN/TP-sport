<?php

require __DIR__ . '/vendor/autoload.php';
use Sport\Club;

use Sport\Dijon\Sport as SportDijon;
use Sport\Dijon\SportBallon as SportBallonDijon;
use Sport\Dijon\SportRelais as SportRelaisDijon;

use Sport\PSG\Sport as SportPSG;
use Sport\PSG\SportBallon as SportBallonPSG;
use Sport\PSG\SportRelais as SportRelaisPSG;

use Sport\Nantes\Sport as SportNantes;
use Sport\Nantes\SportBallon as SportBallonNantes;
use Sport\Nantes\SportRelais as SportRelaisNantes;


// Init les clubs
$club = array();
$club[1] = new Club(1, "Dijon", 63);
$club[2] = new Club(2, "PSG", 67);
$club[3] = new Club(3, "Nantes", 65);

// Les sports de Dijon
$sb = new SportBallonDijon("Basketball", 5, 35, 45);
$club[1]->AjouterSport($sb);

// Les sports de PSG
$sport1 = new SportPSG("Javelot", 1);
$sport2 = new SportPSG("Judo", 1);
$sportBallon1 = new SportBallonPSG("Football", 11, 68, 105);
$sportBallon2 = new SportBallonPSG("Handball", 7, 35, 65);
$sportRelais1 = new SportRelaisPSG("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

// Les sports Nantes
$sport3 = new SportNantes("Cyclisme", 1);
$sportBallon3 = new SportBallonNantes("FootBall", 11, 68, 105);
$sportBallon4 = new SportBallonNantes("Ruby", 15, 65, 115);
$sportRelais2 = new SportRelaisNantes("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);



echo "Liste des clubs : <br>";

echo "Liste des clubs : <br>";
    foreach($club as $c) {
        echo '<a href="index.php?id=' . $c->getIdClub() . '">' . $c->getIdClub() . " - " . $c->getNomClub() . " - " . $c->getnbPoints() . '</a><br>';
    }

if (isset($_GET['id'])) {
    echo "LISTE DES SPORT DU CLUB" . $club[$_GET['id']]-getNomClub() . "<br>";
    
    
}
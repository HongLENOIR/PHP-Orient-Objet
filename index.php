<?php

 # Importation de notre classe Ecole
require_once 'models/Ecole.php';

/**
 * Création d'une instance de la class Ecole.
 * Notre Variable $ecole est un objet de cette class.
 * Cet objet a accès aux propriétés et méthodes de la class.
 */
// $ecole = new Ecole();

# Affecter des valeurs à notre objet
/*$ecole->nom = "Webforce3";
$ecole->adresse ="18 Rue Geoffroy l'Asnier, 75004 Paris";
$ecole->capacite = 20;
$ecole->type = "Formation";
$ecole->directeur = "Sylviane PEREZ";

# Créons un nouvel objet et hydratons le.
$ecole2 = new Ecole();
$ecole2->nom = "Ecole42";
$ecole2->adresse ="Boulevard de Clichy, 75017 Paris";
$ecole2->capacite = 300;
$ecole2->type = "Formation";
$ecole2->directeur = "Xavier NIEL";*/

$ecole = new Ecole(
    'WF3',
    '18 Rue Geoffroy l\'Asnier, 75004 Paris',
    20,
    'Formation',
    'Sylviane PEREZ',
);
$ecole2 = new Ecole(
    'LePoleS',
    '11 Allée11 ALL Saint-Exupéry, 92390 Villeneuve-La-Garenne',
    300,
    'Formation',
    'Louisa Cherifi',
);
echo '<pre>';
print_r($ecole);
print_r($ecole2);
echo '</pre>';

# Affichez le nom de l'école dans une balise h1
echo '<h1>' .$ecole->getNom() .'</h1>' ;
echo '<h1>' .$ecole2->getNom() .'</h1>' ;

# Grâce au setter, je fournis à mon objet
$ecole->setNom('WF3 Paris');
echo '<h1>' .$ecole->getNom() .'</h1><br>' ;

/*** ----------------Class Classe------------**/
require_once 'models/Classe.php';
$classe = new Classe(
    'Ce2',
    25,
    'micheal',

);
$classe2 = new Classe(
    '4è',
    30,
    'Beatrice',

);
echo '<pre>';
print_r($classe);
print_r($classe2);
echo '</pre>';
echo '<h1>' .$classe->getNom() .'</h1>' ;
echo '<h1>' .$classe2->getNom() .'</h1>' ;
$classe->setNom('CM2');
echo '<h1>' .$classe->getNom() .'</h1><br>' ;

/*** ----------------Class Eleve------------**/
require_once 'models/Eleve.php';
$eleve= new Eleve(
    'Louis',
    'LIU',
    '15ans',
    'garcon',
);
$eleve2= new Eleve(
    'Maylis',
    'LENOIR',
    '13ans',
    'Fille',
);
echo '<pre>';
print_r($eleve);
print_r($eleve2);
echo '</pre>';
echo '<h1>' .$eleve->getNom() .'</h1>' ;
echo '<h1>' .$eleve2->getNom() .'</h1>' ;
$eleve->setNom('Eloÿ');
echo '<h1>' .$eleve->getNom() .'</h1><br>' ;


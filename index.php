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

# Création des Eleves
$eleve3 = new Eleve('Zaklin', 'POCANDI', 49, 'femme');
$eleve4 = new Eleve('Koumba', 'KONARE', 28, 'femme');
$eleve5 = new Eleve('Emmanuelle', 'ARNAUD', 33, 'femme');
$eleve6 = new Eleve('Sandra', 'JACQUES', 48, 'femme');
echo '<pre>';
print_r($eleve3);
print_r($eleve4);
print_r($eleve5);
print_r($eleve6);
echo '</pre>';

# Création des Classes
$front = new Classe('Front', 18, 'Fadhi NASRI');
$back = new Classe('Back', 18, 'Mathieu QUITTARD');
$full = new Classe('Fullstack', 18, 'Hugo LIEGEARD');
echo '<pre>';
print_r($front);
print_r($back);
print_r($full);
echo '</pre>';


# Problématique
# Comment affecter chaque élève dans une classe?
$front->addEleves($eleve4); // affecter un eleve dans une classe
$front->addEleves($eleve6);
$back->addEleves($eleve3);
$full->addEleves($eleve5);
echo '<pre>';
print_r($front);
print_r($back);
print_r($full);
echo '</pre>';

# Comment affecter chaque classe dans une école?
# collection objet->éléve dans le tableau dans un objet->classe
$ecole->addClasses($front);
$ecole->addClasses($back);
$ecole->addClasses($full);

echo '<pre>';
print_r($ecole);
echo '</pre>';
/*$ecole2->setClasses([$classe,$classe2,$full]);
echo '<pre>';
print_r($ecole2);
echo '</pre><hr>';*/

/*
 * Consigne: en partant de l'objet $ecole; affichez la liste ol, ul, li des classes et pour chaque classes les étudiants
 */
# 1, Récupérer via $ecole et Afficher la liste des classes
$classes =$ecole->getClasses();
//print_r($classes);

# On va parcourir nos classes
echo '<ol>';
    /** @var Classe $class */
    foreach ($classes as $classe){ //foreach($classes as $objetClasse
        // Afficher le nom de la classe
        echo '<li>'.$classe->getNom().'<br>' .'</li>';

        # 2, Récupérer et Afficher la liste des élèves itération 重复；一再地做；反复申说 algorithme[数, 信]算法 Fr helper cop yright
        $eleves = $classe->getEleves();
        echo '<ul>';
        /**@ var Eleve $eleve*/
        foreach ($eleves as $eleve){
            echo '<li>'.$eleve->getPrenom().' '. $eleve->getNom() .'</li>';
        } #endforeach eleves
        echo '</ul>';
    } #endforeach classes
echo '</ol><hr>';

echo '<table border="1">';
echo '<h1><b>Ecole</b></h1>';
echo '<style>th,td { padding: 10px;} </style>';
$classes =$ecole->getClasses();
foreach ($classes as $classe){
    echo '<th style="color: black;">'.$classe->getNom() .'<br></th>';

    $eleves = $classe->getEleves();
    foreach ($eleves as $eleve){
        echo '<td>'.$eleve->getPrenom().' '. $eleve->getNom() .'</td>';
    }
}
echo '</table><hr>';


/*$ecole->setClasses([$front,$back,$full]);
$front->setEleves([$eleve3,$eleve4]);
$back->setEleves([$eleve5]);
$full->setEleves([$eleve6]);
$ecole = new Class($front,$back,$full)
foreach ($ecole->getClasses() AS $value ) {
    // $ecole sera mis à jour avec chaque valeur de $ecole...
    echo '<li>'.$ecole->getClasses(). '</li>';
        foreach($classe AS $value2){
            echo '<ol>'.$classe->getEleve(). '</ol>';
        }
}*/

<?php

/**
 * Une classe PHP est une entitée regroupant par thème des variables appélée "propriétés" et des fonctions appelées "méthodes".
 */
class Ecole

{
    /**
     * Déclaration des propriétés de notre class Ecole.
     * -----------------------------------------------
     */

    private $nom;
    private $adresse;
    private $capacite;
    private $type;
    private $directeur;
    // ou private $nom, $adresse,$capacite,$type,directeur;
 /**
  * Pour permettre maintenant l'attribution de valeur à mes propriétés, je vais mettre créer un CONSTRUCTEUR.
  * ----------------------------------------------------------------------
  * L'Objetctif du constructeur c'est d'hydrater notre objet.
  * IL DOIT ETRE ACCESSIBLE PUBLIQUEMENT!
  * ---------------------------------------------------------------------
  * Il est exécutée AUTOMATIQUEMENT par PHP au moment de l'instanciation de la classe
  */
    public function __construct($nom, $adresse, $capacite, $type, $direteur){
        $this->nom =$nom;
        $this->adresse =$adresse;
        $this->capacite =$capacite;
        $this->type =$type;
        $this->directeur =$direteur;
    }

    /**----------- Getters-------------**/
    public function getNom(){
        return $this->nom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getCapacite(){
        return $this->capacite;
    }

    public function getType(){
        return $this->type;
    }

    public function getDirecteur(){
        return $this->directeur;
    }
    /**  --------Setters--------   **/
    public function setNom($nom){
        return $this->nom = $nom;
    }

    public function setAdresse($adresse){
        return $this->adresse = $adresse;
    }

    public function setCapacite($capacite){
        return $this->capacite = $capacite;
    }

    public function setType($type){
        return $this->type = $type;
    }

    public function setDirecteur($directeur){
        return $this->directeur = $directeur;
    }

} //    Fin de la classe Ecole
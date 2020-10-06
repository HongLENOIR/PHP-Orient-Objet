<?php


class Eleve
{
    private $prenom;
    private $nom;
    private $age;
    private $sexe;

    /*** ----------------construct------------**/
    public function __construct($prenom, $nom, $age, $sexe){
        $this->prenom =$prenom;
        $this->nom =$nom;
        $this->age =$age;
        $this->sexe =$sexe;

    }

    /*** ----------------Getter------------**/
    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSexe(){
        return $this->sexe;
    }
    /*** ----------------Setter------------**/
    public function setPrenom($prenom){
        return $this->prenom =$prenom;
    }
    public function setNom($nom){
        return $this->nom =$nom;
    }

    public function setAge($age){
        return $this->age = $age;
    }
    public function setSexe($sexe){
        return $this->sexe =$sexe;
    }

}
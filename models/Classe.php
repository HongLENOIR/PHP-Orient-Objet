<?php
/* --
    CONSIGNE : En vous appuyant sur notre travail
    avec la classe Ecole ; créez maintenant les
    classes "Classe" et "Eleve" dans des fichiers
    séparés.
    ---------------------------
    Classe.php et Eleve.php : Propriétés,
        Constructeur, Getters & Setters.
    Eleve: prenom, nom, age, sexe
    Classe: nom, capacite,  professeurP
-- */


class Classe
{
    private $nom;
    private $capacite;
    private $professeurP;
    private $eleves;

    /*** ----------------construct------------**/
    public function __construct($nom, $capacite, $professeurP){
        $this->nom =$nom;
        $this->capacite =$capacite;
        $this->professeurP =$professeurP;
        $this->eleves =[];
    }
    /* pareille comme suivant:
     * public function __construct($nom, $capacite, $professeurP, $eleves =[]){
        $this->nom =$nom;
        $this->capacite =$capacite;
        $this->professeurP =$professeurP;
        $this->eleves = $eleves;
    }
     * */


    /*** ----------------Getter------------**/
    public function getNom(){
        return $this->nom;
    }
    public function getCapacite(){
        return $this->capacite;
    }
    public function getProfesseurP(){
        return $this->professeurP;
    }

    /*** ----------------Setter------------**/
    public function setNom($nom){
        return $this->nom =$nom;
    }

    public function setCapacite($capacite){
        return $this->capacite = $capacite;
    }
    public function setProfesseurP($professeurP){
        return $this->professeurP =$professeurP;
    }
    /**
     * @return array
     */
    public function getEleves()
    {
        return $this->eleves;
    }

    /**
     * @param array $eleves
     */
    public function setEleves($eleves)
    {
        $this->eleves = $eleves;
    }
    /**
     * @param array $eleves, pour rajouter dans le tableau les éleves
     */
    public function addEleves(Eleve $eleves)// pour sécurité rajouter sa classe Eleve, pour éviter
    {
        $this->eleves[] = $eleves;
    }




}
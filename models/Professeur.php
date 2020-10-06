<?php


class Professeur
{
    private $prenom, $nom,$age,$sexe;

    /**
     * Professeur constructor.
     * @param $prenom
     * @param $nom
     * @param $age
     * @param $sexe
     */
    public function __construct($prenom, $nom, $age, $sexe)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }


}
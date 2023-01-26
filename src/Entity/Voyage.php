<?php

namespace App\Entity;

class Voyage
{
    private $pays;
    private $capital;
    private $description;

    public static $voyages = [];

    public function __construct($pays, $capital, $description)
    {
        $this->pays = $pays;
        $this->capital = $capital;
        $this->description = $description;
        self::$voyages[] = $this;
    }

    public function getPays(){return $this->pays;}
    public function getCapital(){return $this->capital;}
    public function getDescription(){return $this->description;}
    public function setPays($pays){ $this->pays = $pays; return $this;}
    public function setCapital($capital){$this->capital = $capital; return $this;}
    public function setDescription($description){$this->description = $description; return $this;}


    public static function creerVoyages()
    {
        $voyage1 = new Voyage("IleMaurice","PortLouis","Située au nord-ouest du pays, Port-Louis ne vous laissera pas indifférent. Fondée par le gouverneur français Bertrand-François Mahé de Labourdonnais en 1735, la cité est le centre économique de l'île et une ville très animée en journée, grouillant de vie.");
        $voyage2 = new Voyage("Madagascar","Antananarivo","Antananarivo est la capitale de Madagascar, située dans la région des Hautes Terres centrales de l'île. Surplombant la ville, le palais Rova de Manjakamiadana fut le cœur du royaume des Merina à partir du XVIIe siècle. Il abrite des maisons en bois et des tombeaux royaux. Le palais baroque rose d'Andafiavaratra se trouve dans le quartier proche de la Haute Ville. Dans le centre, le lac Anosy en forme de cœur est bordé de jacarandas.");
        $voyage3 = new Voyage("Thailande","Bangkok","La Thaïlande a connu une croissance économique rapide entre 1985 et 1995.");
    }
    public static function getVoyagesParNom($pays){
        foreach (self::$voyages as $voyage) {
            if (strtolower($voyage->getPays()) === $pays) {
                return $pays;
            }
        }
    }
}

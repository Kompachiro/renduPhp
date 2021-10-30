<?php

abstract class Perso
{
    protected string $name;
    protected int $pv;
    protected int $def;
    protected int $atk;
 

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // public function __construct(string $name, int $pv, int $def, int $atk){
    //     $this->pv = $pv;
    //     $this->def = $def;
    //     $this->atk = $atk;
    // }
    
    public function getName ()
    {
        return $this->nom;
    }

    public function setName (string $name)
    {
        $this->name = $name;
    }
    
    public function getPv()
    {
        return $this->pv;
    }

    public function setPv(int $pv)
    {
        $this->pv = $pv;
        
    }


    public function getDef()
    {
        return $this->def;
    }

    public function setDef(int $def)
    {
        $this->def = $def;
    }


    public function getAtk()
    {
        return $this->atk;
    }

    public function setAtk(int $atk)
    {
        $this->atk = $atk;
    }


    public function hit(Perso $ennemy): void
    {
        $newPv = $ennemy->getPv() - ($this->getAtk() - $ennemy->getDef());
        if ($newPv > $ennemy->getPv()){
            return;
        }
        $ennemy->setPv($newPv);

    }

}







?>
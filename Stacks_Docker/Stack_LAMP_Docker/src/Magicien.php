<?php

final class Magicien extends Perso
{
    private int $mana= 100;
    protected int $pv = 70;
    protected int $def = 20;
    protected int $atk = 40;


    // public function __construct(string $nom, int $pv, int $def, int $atk, int $mana)
    // {
    //     parent::__construct($nom, $pv, $def, $atk);
        
    //     $this->mana = $mana;
    // }

    public function getMana()
    {
        return $this->mana;
    }

    public function setMana(int $mana){
        $this->mana = $mana;
    }
  

}
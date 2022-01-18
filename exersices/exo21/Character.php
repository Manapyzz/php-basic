<?php

class Character
{
    protected string $name;
    protected int $health;
    protected int $damage;

    public function __construct(string $name, int $health, int $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }
}

class Mage extends Character
{
    private int $magicDamage;

    public function __construct(string $name, int $health, int $damage, int $magicDamage)
    {
        $this->magicDamage = $magicDamage;
        parent::__construct($name, $health, $damage);
    }

    public function isPowerful(): bool
    {
        return $this->magicDamage > $this->damage;
    }
}

$mage = new Mage('Lemagicien', 200, 20, 25);

var_dump($mage->isPowerful());
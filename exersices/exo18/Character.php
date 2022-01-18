<?php

class Character
{
    private string $name;
    private int $health;
    private int $damage;

    public function __construct(string $name, int $health, int $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    public function sayHi(): string
    {
        return sprintf('Hey, I am %s', $this->name);
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    public function attack(Character $enemy)
    {
        $enemy->setHealth($enemy->getHealth() - $this->damage);
    }
}


$champion = new Character('Champion', 100, 10);

$enemy = new Character('Lemechant', 200, 3);

var_dump($enemy);

$champion->attack($enemy);
$champion->attack($enemy);
$champion->attack($enemy);
$champion->attack($enemy);

var_dump($enemy);

var_dump($champion);

$enemy->attack($champion);
$enemy->attack($champion);

var_dump($champion);
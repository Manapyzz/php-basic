<?php

class Dresseur
{
    private string $name;
    private Pokemon $firstPokemon;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function catchPokemon(Pokemon $pokemon)
    {
        $this->firstPokemon = $pokemon;
    }

    public function getFirstPokemon(): Pokemon
    {
        return $this->firstPokemon;
    }
}

class Pokemon
{
    private string $name;
    private string $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }
}

$sacha = new Dresseur('Sacha');

$pikachu = new Pokemon('Pikachu', 'Electrique');

$sacha->catchPokemon($pikachu);

var_dump($sacha->getFirstPokemon()->getName());
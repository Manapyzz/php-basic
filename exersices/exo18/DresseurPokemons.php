<?php

class Dresseur
{
    private string $name;
    private array $pokemons = [];

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
        $this->pokemons[] = $pokemon;
    }

    public function getPokemons(): array
    {
        return $this->pokemons;
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
$bulbi = new Pokemon('Bulbizarre', 'Plante');

$sacha->catchPokemon($pikachu);
$sacha->catchPokemon($bulbi);

foreach ($sacha->getPokemons() as $pokemon)
{
    echo sprintf('This is %s, his type is %s', $pokemon->getName(), $pokemon->getType());
}
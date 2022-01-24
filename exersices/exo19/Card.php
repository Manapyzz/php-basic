<?php

class Card
{
    private int $number;
    private string $suit;

    public function __construct(int $number, string $suit)
    {
        $this->number = $number;
        $this->suit = $suit;
    }
}

class Deck
{
    private array $cards;

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function shuffle(): void
    {
        for ($i = 0; $i < count($this->cards)-1; $i++)
        {
            $tmpCard = $this->cards[$i];
            $randomIndex = random_int(0, count($this->cards) - 1);

            $this->cards[$i] = $this->cards[$randomIndex];
            $this->cards[$randomIndex] = $tmpCard;
        }
    }

    public function pickOne(): Card
    {
        $randomIndex = random_int(0, count($this->cards)-1);
        return $this->cards[$randomIndex];
    }
}

$card1 = new Card(1, 'diamonds');
$card2 = new Card(2, 'diamonds');
$card3 = new Card(3, 'diamonds');
$card4 = new Card(4, 'diamonds');
$card5 = new Card(5, 'diamonds');
$card6 = new Card(6, 'diamonds');

$deck = new Deck();
$deck->addCard($card1);
$deck->addCard($card2);
$deck->addCard($card3);
$deck->addCard($card4);
$deck->addCard($card5);
$deck->addCard($card6);

var_dump($deck);

$deck->shuffle();

var_dump($deck);

var_dump($deck->pickOne());

<?php

declare(strict_types=1);

function sayHelloTo(string $name): void
{
    echo sprintf('Bonjour %s', $name);
}

//sayHelloTo('Alex');
//sayHelloTo('Rick');

function multiply(int $a, int $b) : int
{
    return $a * $b;
}

//$result1 = multiply(2, 2);
//$result2 = multiply(4, 2);

function advancedMultiply(array $numbers): int
{
    $result = null;
    foreach ($numbers as $key => $number)
    {
        if ($key === 0) {
            $result = $number;
        } else {
            $result = $result * $number;
        }
    }

    return $result;
}

$randomNumbers = [20, 58, 14];

//echo sprintf('Le résultat est %s', advancedMultiply($randomNumbers));

function detectApple(array $fruits): int
{
    $appleCounter = 0;

    foreach ($fruits as $fruit)
    {
        if ($fruit === 'apple')
        {
            $appleCounter++;
        }
    }

    return $appleCounter;
}


$fruits = ['orange', 'apple', 'banana', 'apple', 'apple', 'coconut', 'apple'];

echo sprintf('Il y %s pommes dans ce tableau', detectApple($fruits));
<?php

echo 'Boucler de 1 à 100: <br><br>';

for ($i = 1; $i <= 100; $i++)
{
    echo $i . '<br>';
}

echo '<br>';
echo 'Boucler sur les fruits: <br><br>';

$fruits = ['strawberry', 'apple', 'banana', 'orange','pear','cherry'];

foreach ($fruits as $fruit)
{
    echo $fruit . '<br>';
}

echo '<br>';
echo 'Boucler sur les fruits sauf "apple": <br><br>';

$moreFruits = ['strawberry', 'apple', 'banana', 'orange','pear','cherry', 'apple', 'coconut', 'apple'];

foreach ($moreFruits as $fruit)
{
    if ($fruit !== 'apple')
    {
        echo $fruit . '<br>';
    }
}

echo '<br>';
echo 'Autre solution possible (voir code)": <br><br>';

foreach ($moreFruits as $fruit)
{
    if ($fruit === 'apple')
    {
        continue;
    }

    echo $fruit. '<br>';
}

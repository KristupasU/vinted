<?php

$prizes = [
    ['name' => 'car', 'value' => 5000],
    ['name' => 'money', 'value' => 100],
    ['name' => 'money', 'value' => 200],
    ['name' => 'money', 'value' => 500],
    ['name' => 'fridge', 'value' => 1500],
    ['name' => 'travel tickets', 'value' => 2000],
];
function randomArray($prizes)
{

    $randomKey = array_rand($prizes);
    return $prizes[$randomKey];

}

$randomPrize = randomArray($prizes);

function printPrize($randomPrize)
{

    if ($randomPrize['name'] === 'money') {

        print_r('You have won $' . $randomPrize['value']);

    } elseif ($randomPrize['name'] === 'car'){

        print_r('You have won ' . $randomPrize['name'] .
            "! you can choose to take the prize or $"
            . $randomPrize['value'] . ' instead!');

    } else {

        $halfPrice = ($randomPrize['value'] / 2);
        print_r('You have won ' . $randomPrize['name'] .
            "! you can choose to take the prize or $" . $halfPrice . ' instead!');

    }
}

printPrize($randomPrize);


?>
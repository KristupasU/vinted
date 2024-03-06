<?php

$messages = [
    [12, 'my', 4, [], 'name'],
    [3, 'is', null, 'John', 10],
    [1, true, 1],
    ['Earl', true],
];

function extractAnswers($messages)
{

    $result = '';
    $sum = 0;

    foreach ($messages as $message) {
        foreach ($message as $variable) {

            if (is_null($variable)) {
                break;


            } elseif (is_string($variable)) {

                $result = $result . $variable . " ";

            } elseif (is_int($variable)) {
                $sum += $variable;

            }

        }

    }
    return ["Text" => $result, "Sum" => $sum];

}

$arrayAnswer = extractAnswers($messages);
echo $arrayAnswer['Text'] . $arrayAnswer['Sum'];


?>
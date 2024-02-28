<?php

const CAMERA_5_9 = 1;
const CAMERA_0_4 = 2;
const CAMERA_4_9_F = 3;

$cameras = [
    [
        'id' => 1,
        'place' => ['lat' => 54.698050, 'lng' => 25.249254, 'address' => 'Vilnius, 08112 Vilniaus m. sav.'],
        'type' => CAMERA_5_9,
    ],
    [
        'id' => 2,
        'place' => ['lat' => 54.700247, 'lng' => 25.250827, 'address' => 'Elnių g., 08101 Vilnius'],
        'type' => CAMERA_5_9,
    ],
    [
        'id' => 3,
        'place' => ['lat' => 54.699024, 'lng' => 25.247489, 'address' => 'Lapių g. 3-37, 08103 Vilnius'],
        'type' => CAMERA_0_4,
    ],
    [
        'id' => 4,
        'place' => ['lat' => 54.697277, 'lng' => 25.249738, 'address' => 'Kęstučio g. 50, 08112 Vilnius'],
        'type' => CAMERA_4_9_F,
    ],
];

function current_time()
{

    echo "Today is " . date("Y-m-d H:i:s") . "<br>";
}

current_time();

$secondsValue = date('s');

function getLast($seconds)
{
    $arr = str_split($seconds);
    return end($arr);

}

$secondsValue = getLast($secondsValue);

function printYes($camera)
{
    print_r($camera['id'] . ' ' . $camera['place']['address'] . ' Y' . "<br/>");
}

function printNo($camera)
{
    print_r($camera['id'] . ' ' . $camera['place']['address'] . ' N' . "<br/>");
}
function printYesLine($camera) {
    print_r($camera['id'] . ' ' . $camera['place']['address'] . ' Y');
}


function Camera59($secondsValue, $cameras)
{

    foreach ($cameras as $camera) {

        if ($secondsValue >= 5 && $secondsValue <= 9 && $camera['type'] == CAMERA_5_9) {
            printYes($camera);

        } else {
            if ($secondsValue >= 0 && $secondsValue < 5 && $camera['type'] == CAMERA_5_9) {
                printNo($camera);

            }
        }


    }
}

function Camera04($secondsValue, $cameras)
{
    foreach ($cameras as $camera) {

        if ($secondsValue >= 0 && $secondsValue <= 4 && $camera['type'] == CAMERA_0_4) {

            printYes($camera);

        } else {
            if ($secondsValue > 4 && $camera['type'] == CAMERA_0_4) {
                printNo($camera);
            }

        }


    }
}

function CameraFlash($secondsValue, $cameras)
{


    foreach ($cameras as $camera) {


        if ($secondsValue >= 4 && $secondsValue <= 9 && $camera['type'] == CAMERA_4_9_F) {
            printYesLine($camera);

            if ($secondsValue >= 7 && $secondsValue <= 9 && $camera['type'] == CAMERA_4_9_F) {
                echo ' F';
            }
        } else {
            if ($secondsValue < 4 && $camera['type'] == CAMERA_4_9_F) {
                printNo($camera);
            }

        }
    }

}

function cameraAll($secondsValue, $cameras) {

    foreach ($cameras as $camera) {

        if ($camera['type'] == CAMERA_5_9) {
            if ($secondsValue >= 5 && $secondsValue <= 9) {
                printYes($camera);
            } else {
                printNo($camera);
            }
        } elseif ($camera['type'] == CAMERA_0_4) {
            if ($secondsValue >= 0 && $secondsValue <= 4) {
                printYes($camera);

            } else {
                printNo($camera);
            }
        } elseif ($camera['type'] == CAMERA_4_9_F) {
            if ($secondsValue >= 4 && $secondsValue <= 9) {
                printYesLine($camera);
                if ($secondsValue >= 7 && $secondsValue <= 9) {
                    echo ' F';
                }
            } else {
                printNo($camera);
            }
        }
    }
}

Camera59($secondsValue, $cameras);
Camera04($secondsValue, $cameras);
CameraFlash($secondsValue, $cameras);
//cameraAll($secondsValue, $cameras);

?>
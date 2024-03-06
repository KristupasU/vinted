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


if (!empty($_POST['cameraValue'])) {

    $selectedCamera = $_POST['cameraValue'];
    $final = showArray($cameras, $selectedCamera);

} else {

    $final = "";
}


function showArray($cameras, $selectedCamera){

    $result = [];
    foreach ($cameras as $camera) {

        if ($selectedCamera == $camera['type']) {
            $result[] = $camera;

        }
    }

    return $result;

}


?>

<!DOCTYPE>

<html>
<title>Camera filter</title>
<body>

<div>
    <label for="camera">Choose a camera:</label>
    <form method="post" action="cameras2.php">
        <select name="cameraValue">
            <option value=""></option>
            <option value="<?= CAMERA_5_9 ?>">CAMERA_5_9</option>
            <option value="<?php echo CAMERA_0_4; ?>">CAMERA_0_4</option>
            <option value="<?= CAMERA_4_9_F ?>">CAMERA_4_9_F</option>
        </select>
        <input type="submit" value="submit"/>
    </form>
</div>

<h4><?php print_r($final); ?></h4>

</body>
</html>

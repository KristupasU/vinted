<?php


if(isset($_POST['submit']) && is_numeric($heightValue = $_POST['height'])){

    $result = formatHeight($heightValue);

} else {

    $result = "";
}

function formatHeight($heightValue){

    $footValue = 30.48;
    $inchValue = 2.54;

    $heightFeet = $heightValue / $footValue;
    $heightFeetOnly = intval($heightFeet);

    $heightCentimeters = intval($heightFeetOnly * $footValue);

    $centimetersRemaining = $heightValue - $heightCentimeters;
    $heightInches = round($centimetersRemaining / $inchValue);

    if($heightInches == 12){
        $heightFeetOnly++;
        return $heightFeetOnly . "' ";

    } else {

        return $heightFeetOnly . "' " . $heightInches . '"';

    }

}

?>


<!DOCTYPE>
<html>

<head>
    <title>Height converter</title>
</head>
<body>

    <h4>Enter height (cm)</h4>

    <form action="height_converter.php" method="POST">
    <input type="number" name="height">

        <div>
            <input type="submit" name="submit">
        </div>

    </form>

        <h4><?php echo $result; ?></h4>


</body>
</html>



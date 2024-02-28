<?php


	if(isset($_POST['submit'])){
		$numberValue = $_POST['number'];
		echo $numberValue . " ";
	}

	if(isset($numberValue)){


		if($numberValue % 5 == 0 && $numberValue % 3 == 0){
			echo 'FizzBuzz';

		} elseif($numberValue % 3 == 0) {
			echo 'Buzz';

		} elseif($numberValue % 5 == 0) {
			echo 'Fizz';

		} else {
			echo '-';

		}

	}


?>

<!DOCTYPE html>
<html>
	<section class="container grey-text">
	<h2 class="center">Enter a number</h2>
	<form action="FizzBuzz.php" method="POST">
		<input type="number" name="number">
	<div>
		<input type="submit" name="submit">
	</div>
</html>
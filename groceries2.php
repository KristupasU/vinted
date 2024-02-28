<?php

    $items = [
            ['name' => 'banana', 'category' => 'fruit', 'price' => 200],
            ['name' => 'orange', 'category' => 'fruit', 'price' => 50],
            ['name' => 'beef', 'category' => 'meat', 'price' => 600],
            ['name' => 'bread', 'category' => 'bakery', 'price' => 150],
            ['name' => 'cupcakes', 'category' => 'bakery', 'price' => 500],
            ['name' => 'chicken', 'category' => 'meat', 'price' => 400],
        ];

    function find_grocery($items, $amountOfMoney) {

        foreach ($items as $grocery) {

            if($amountOfMoney == $grocery['price']) {
                return $grocery;
            }

        }

        return null;
    }

    $money = $_POST['money'];

     $item = find_grocery($items, $money);
     var_dump($item);echo '<br>';


?>

<!DOCTYPE>

<html>
<title>Grocery filter</title>
<body>

    <div>
        <form action="groceries2.php" method="POST">
            <label for="money">Enter price</label>
            <input type="number" name="money" id="money">
            <input type="submit" name="submit" value="search">
        </form>
    </div>

</body>
</html>
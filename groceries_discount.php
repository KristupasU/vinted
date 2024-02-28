<?php


    $items = [
        ['name' => 'banana', 'category' => 'fruit', 'price' => 200],
        ['name' => 'orange', 'category' => 'fruit', 'price' => 50],
        ['name' => 'beef', 'category' => 'meat', 'price' => 600],
        ['name' => 'bread', 'category' => 'bakery', 'price' => 150],
        ['name' => 'cupcakes', 'category' => 'bakery', 'price' => 500],
        ['name' => 'chicken', 'category' => 'meat', 'price' => 400],
    ];


    $itemName = $_POST['name'];
    $result = find_grocery($items, $itemName);


    function ItemNamePrice($result){
        echo $result['name'] . " $" . $result['price'];
    }

    function reducedPrice($discountedPrice){
        echo ' $' . $discountedPrice . '<br/>' ;
    }
    function generateDiscount(){
            return round(rand(10,50), -1);
        }

    function find_grocery($items, $itemName){

            foreach ($items as $grocery) {

                if($itemName === $grocery['name']) {
                    return $grocery;
                }
            }

            return null;
        }

    if($result == null){
            echo "Item not found";

        } else {
            ItemNamePrice($result);
            if(!empty($_POST['show_discount'])){
                $discount = generateDiscount();

                $discountedPrice = $result['price'] - $result['price'] * ($discount / 100);
                reducedPrice($discountedPrice);
            }
        }


?>

<!DOCTYPE>

<html>
<title>Grocery filter</title>
<body>

<form action="groceries_discount.php" method="POST">
    <div>
        <label>Show discount?</label>
        <input type="checkbox" name="show_discount" value="checkbox_value">
    </div>

    <div>
        <label>Enter grocery</label>
        <input type="text" name="name">
        <input type="submit" name="submit" value="search">
    </div>
</form>
</body>
</html>
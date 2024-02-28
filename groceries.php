<?php

    $items = [
        ['name' => 'banana', 'category' => 'fruit', 'price' => 200],
        ['name' => 'orange', 'category' => 'fruit', 'price' => 50],
        ['name' => 'beef', 'category' => 'meat', 'price' => 600],
        ['name' => 'bread', 'category' => 'bakery', 'price' => 150],
        ['name' => 'cupcakes', 'category' => 'bakery', 'price' => 500],
        ['name' => 'chicken', 'category' => 'meat', 'price' => 400],
    ];

    function print_groceries($item) {
        echo $item['name'] . " - $" .  $item['price'] . "<br />";
    }

        if (!empty($_POST['category']) && (isset($_POST['submit']) && is_numeric($_POST['price']))) {
            foreach ($items as $item) {
                if ($_POST['category'] == $item['category'] && ($_POST['price'] >= $item['price'])) {
                    print_groceries($item);
                }
            }
        } else if (!empty($_POST['category'])) {
            foreach ($items as $item) {
                if ($_POST['category'] == $item['category']) {
                    print_groceries($item);
                }
            }
        } else if (isset($_POST['submit']) && is_numeric($_POST['price'])) {
            foreach ($items as $item) {
                if ($_POST['price'] >= $item['price']) {
                    print_groceries($item);
                }
            }
        } else {
            foreach ($items as $item) {
                print_groceries($item);
            }
        }

?>

<!DOCTYPE>

<html>
<head>
    <title>Grocery filter</title>
</head>
<body>

<form action="groceries.php" method="POST">
    <label for="category">Choose a category:</label>
    <select name="category">
        <option value=""></option>
        <option value="fruit">Fruit</option>
        <option value="meat">Meat</option>
        <option value="bakery">Bakery</option>
    </select>

    <div>

        <label>Enter price</label>
        <input type="number" name="price">
        <input type="submit" name="submit" value="search">
    </div>

</form>
</body>
</html>
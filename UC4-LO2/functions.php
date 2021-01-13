<?php 

// functions

function sayHello($name = 'Mark ', $time = 'morning'){
    echo "Good $time, $name" . '<br />';
}

sayHello();
sayHello('Mark ' );
sayHello('Anthony ', 'night');

function formatProduct($product){
    echo "{$product['name']} costs Php.{$product['price']} to buy <br />";
    return "The {$product['name']} costs Php.{$product['price']} to buy <br />";
}

formatProduct(['name' => 'gold star', 'price' => 20]);

$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
echo $formatted;

?>

    <!DOCTYPE html>
    <html>
    <head>
    <title>UC4 L02 WEB DEV - Assignments</title>
    </head>
    <body>
    <h1>UC4 L02 WEB DEV - Functions</h1>
    </body>
    </html>
<?php

// Connect to database
$conn = mysqli_connect('localhost', 'Mark', 'Markiee', 'ninja_pizzas');

// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>
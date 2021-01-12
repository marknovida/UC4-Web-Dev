
<?php
    // // Variables & Constants
    // define('Name', 'Mark Anthony');
    // // echo 'Hello world!!';
    // $name = 'Novida ';
    // $age = 20;

    // Strings
    // $unangString = "Tagalog ";
    // $secondString = "English ";

    // echo $unangString . $secondString;
    // echo "My name is Mark Anthony $name ";
    // echo 'Mark Anthony ' . $name;

    // echo " Me and My Problem \"Whaaah\"";
    // echo ' Mag cocode na sya mag cocode na sya "Whaaah" ';
    // echo $name[0];
    // echo strlen($name);
    // echo strtoupper($name);
    // echo strtolower($name);
    // echo str_replace('N', 'n', $name);

    // Numbers
    $radius = 25;
    $pi = 9.18;

    // basic - *, /, +, -, ^
    // echo $pi  * $radius**2;
    // echo 2 * (5 + 8) / 4;

    // increment & decrement operators
    // echo $radius++;
    // echo $radius;

    // shorthand operators
    // $age = 20;

    // $age -= 10;
    // $age *= 2;
    // echo $age;

    // Number function

    // echo floor($pi);
    // echo ceil($pi);
    // echo pi();

    // indexed arrays 

    // $myName = ['Mark ', 'Anthony', 'Novida'];
    // echo $myName[0];

    // $myName0 = array('mark', 'anthony');
    // echo $myName0[1];

    // $ages = [20, 30, 40, 50, 60];
    // print_r ($ages);
    // $ages [1] = 25;
    // print_r ($ages);
    // $ages[] = 65;
    // print_r ($ages);

    // array_push($ages, 70);
    // print_r ($ages);

    // echo count ($ages);

    // $myName1 = array_merge($myName, $myName0);
    // print_r ($myName1);
    
    // associative arrays (key & value pairs)

    // $arrayOne = ['Mark' => 'Cute', 'Anthony' => 'cute', 'Novida' => 'CUTE'];
    // echo $arrayOne['Mark'];
    // print_r ($arrayOne);

    // $arrayTwo = array('Mark' => 'Cute', 'Anthony' => 'cute');
    // print_r($arrayTwo);

    // $arrayTwo['Mark'] = 'Cute';
    // print_r($arrayTwo);

    // echo count($arrayOne);

    // $arrayThree = array_merge($arrayOne, $arrayTwo);
    // print_r($arrayThree);


    // Multidimensional Arrays
    $blogs = [
        ['title' => 'My Life', 'author' => 'Mark', 'content' => 'essay', 'likes' => 100],
        ['title' => 'My Way', 'author' => 'Mark', 'content' => 'Dont sing it', 'likes' => 10000],
        ['title' => 'My Lights', 'author' => 'Mark', 'content' => 'Lights', 'likes' => 100],
    ];
    // print_r($blogs)
    // print_r($blogs[0]['author']);
    // echo count($blogs);

    $blogs[] = ['title' => 'My Life', 'author' => 'Mark', 'content' => 'essay', 'likes' => 100];

    // print_r($blogs)
    $popped = array_pop($blogs);   
    print_r($popped);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Php File</title>
</head>
<body>
    <h1><?php echo 'Helloooooooo, Goodmorning'; ?></h1><br>
    <!-- <h2><?php echo Name ;?></h2>
    <h2><?php echo $name ;?></h2>
    <h2><?php echo $age ;?></h2> -->
</body>
</html>
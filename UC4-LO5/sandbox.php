<?php 

	// ternary operators

	$score = 50;

	// if($score > 40){
	// 	echo 'high score!';
	// } else {
	// 	echo 'low score!';
	// }

    // echo $score > 40 ? 'high score!' : 'low score!';
    

    // superglobals

	//$_GET['name'], $_POST['name']

	echo $_SERVER['SERVER_NAME'] . '<br />';
	echo $_SERVER['REQUEST_METHOD'] . '<br />';
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	echo $_SERVER['PHP_SELF'] . '<br />';

    // $_COOKIE, $_SESSION
    
    if(isset($_POST['submit'])){

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');
    }
    
    
	if(isset($_POST['submit'])){

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');
	}

	// spaceship operator
	//$result = 5 <=> 6;
	//$result = 5 <=> 4;
	//$result = 5 <=> 5;
	$result = 'shaun' <=> 'yoshi';

    echo $result;
    
    if(isset($_POST['submit'])){

		//cookie for gender
		setcookie('gender', $_POST['gender'], time() + 86400);

		session_start();

		$_SESSION['name'] = $_POST['name'];

		header('Location: index.php');
    }
    	
	// $quotes = readfile("readme.txt");
	// echo $quotes;

	$file = 'readme.txt';

	if(file_exists($file)){

		// read file
		echo readfile($file) . '<br />';

		// copy file
		copy($file, 'quotes.txt');

		// absolute path
		echo realpath($file) . '<br />';

		// file size
		echo filesize($file) . '<br />';

		// rename the file
		rename($file, 'test.txt');

	} else {
		echo 'file does not exist';
	}

	// make directory
	mkdir('quotes');


    $file = 'quotes.txt'; 
	
	// opening a file for reading
	// $handle = fopen($file, 'r');

	// read the file
	// echo fread($handle, filesize($file));
	// echo fread($handle, 112);

	// read a single line
	// echo fgets($handle);
	// echo fgets($handle);

	// read a single character
	// echo fgetc($handle);
	// echo fgetc($handle);

	// $handle = fopen($file, 'r+');
	// $handle = fopen($file, 'a+');

	// writing to a file
	// fwrite($handle, "\nEverything popular is wrong.");

	// fclose($file);	

	unlink($file);

    class User {

		public $email;
		public $name;

		public function __construct($name, $email){
			// $this->name = 'mario';
			// $this->email = 'mario@thenetninja.co.uk';
			$this->name = $name;
			$this->email = $email;
		}

		public function login(){
			// echo 'the user logged in';
			echo $this->name . ' logged in';
        }
        public function getName(){
			return $this->name;
		}

		public function setName($name){
			if(is_string($name) && strlen($name) > 1){
				$this->name = $name;
				return "name updated to $name";
			} else {
				return 'not a valid name';
			}
		}


	}

	// $userOne = new User();
	
	// $userOne->login();
	// echo $userOne->name;

	$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

	// echo $userTwo->email;
    $userTwo->login();
    
	// echo $userTwo->getName();
	// echo $userTwo->setName('shaun');
	// echo $userTwo->getName();


?>

<!DOCTYPE html>
<html>
<head>
	<title>php tuts</title>
</head>
<body>

    <!-- <h2><?php echo $score > 40 ? 'high score!' : 'low score!'; ?></h2> -->
    

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>
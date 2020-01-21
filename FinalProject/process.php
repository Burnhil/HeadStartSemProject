<?php
class Store
{
    private $server;
    private $username;
    private $password;
    private $databaseName;
    
    private $dbConnection;
    
    public function __construct()
    {
        $this->databaseName = "headstart";
        $this->password = "";
        $this->server = "localhost";
        $this->username = "root";
        
        $this->dbConnection = new mysqli($this->server, 
            $this->username, 
            $this->password, 
            $this->databaseName);
        
        if ($this->dbConnection->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->dbConnection->connect_error;
        }
    }
    
    public function add()
    {
        // data is coming across via $_POST
        $FirstName = $_POST['firstName'];
        $LastName = $_POST['lastName'];
        $KidsName = $_POST['kidsName'];
        $Income = $_POST['income'];
		$PhoneNumber = $_POST['phoneNumber'];
        
        // Prepare your insert SQL statement
        $sql = "INSERT into `contact` (`FirstName`, `LastName`, `KidsName`, `Income`, `PhoneNumber`) VALUES (?, ?, ?, ?, ?)";
        
        $preparedStatement = null;
        if(!$preparedStatement = $this->dbConnection->prepare($sql)) {
            print($preparedStatement->error);
        }
        
        // Bind your parameters to your prepared statement
        //if(!($preparedStatement->bind_param("s", $FirstName) &&
        //    $preparedStatement->bind_param("s", $LastName) && 
        //    $preparedStatement->bind_param("s", $KidsName) && 
        //    $preparedStatement->bind_param("i", $Income)
		//    $preparedStatement->bind_param("s", $PhoneNumber))){
        //    print($preparedStatement->error);
        //}
        // NOTE: when binding multiple parameters, you can only use one bind_param method call.
        // The first argument describes the values' datatype: s for string, i for integer, d for double.
        // The following arguments are the values to be placed in the placeholders in the same order
        if(!$preparedStatement->bind_param("sssis", $FirstName, $LastName, $KidsName, $Income, $PhoneNumber)) {
            print($preparedStatement->error);
        }
        
        // Execute your bound and prepared statement
        if(!$preparedStatement->execute()) {
            print($preparedStatement->error);
        }

    }
}

//setting up store object to add input data
$Store = new Store();
$Store->add();

require_once 'header.php';
require_once 'nav.php';
require_once 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	//instantiating header class and calling render function
    $menu = new head("header");
    $menu->render();
	?>
<title>Submission Page</title>
<link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<div id="wrapper">
    <?php // get the navigation menu to render here
	$nav = new navMenu("navMenu");
    $nav->render();
	?>
	
<main>
<figure>
	<img src="pics/thanks.jpg" height="500" width="500" alt="Head Start">
</figure>	
<p> Thank you for your interest in the Head Start Program!<br>
  A representative will be in contact. </p>

</main>

<footer>
	<?php 
	//instantiating footer class and calling render function
    $menu = new foot("foot");
    $menu->render();
	?>
</footer>	

</div>
</body>

</html>
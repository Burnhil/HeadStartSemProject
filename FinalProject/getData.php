<?php
// Chris White
// INEW 2334 001
// 04/29/19
// Final Project
require_once 'header.php';
require_once 'nav.php';
require_once 'footer.php';
session_start();    // If you need to access the $_SESSION array, this function call
                    // must be at the top of your code on every page
                    // wheer you want to access the array.
					
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
<?php
if(isset($_SESSION["username"])) {
    // that $_SESSION value should be available here on this page.
    print("Thank you " . $_SESSION["username"] . " for logging in!" . "<br>");
    
    // remove all session variables
    session_unset();
    
    // destroy the session
    session_destroy(); 
    print("Per request the following data has been processed and your session has ended. ". "<br>");
} else {
    print("You are not logged in!");
}

class Store
{
    public $ID;
    public $FirstName;
    public $LastName;
    public $KidsName;
    public $Income;
	public $PhoneNumber;
    
    public function GetData()
    {
		//                      location , username ,password, database
		// accessing headstart data base 
        $mysqli = new mysqli("localhost", "root", "", "headstart");
		
		echo '<table>';
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }

		echo "<td>Parents</td> .<td>Name</td> .<td>Kid</td> .<td>Income</td> .<td>Phone Number</td>";
		//setting up selection from  store table
        $res = $mysqli->query("SELECT * FROM `contact`");
        while($row = $res->fetch_assoc()) {
			
			              
            echo "<tr>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['KidsName']."</td>";
			echo "<td>".$row['Income']."</td>";
			echo "<td>".$row['PhoneNumber']."</td>";
            echo "</tr>";

        }
		echo "</table>";
    }
}

//creating store object
$someStore = new Store();
$someStore->GetData();

?>

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
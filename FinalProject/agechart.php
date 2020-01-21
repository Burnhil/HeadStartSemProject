<?php
// Chris White
// INEW 2334 001
// 04/29/19
// Final Project

declare(strict_types = 1);
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
<title>Age Chart Page</title>
<link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<div id="wrapper">
    <?php // get the navigation menu to render here
	$nav = new navMenu("navMenu");
    $nav->render();
	?>
	
<main>

<p> Please check these figures closely.</p>

<?php
class Age
{

    
    public function GetData()
    {
		//                      location , username ,password, database
		// accessing headstart data base 
        $mysqli = new mysqli("localhost", "root", "", "headstart");
		
		echo '<table>';
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }

		echo "<thead>.<th>4 Years old</th> .<th></th> .<th>3 Years old</th><br></thead>";
		//setting up selection from  age table
        $res = $mysqli->query("SELECT * FROM `agechart`");
        while($row = $res->fetch_assoc()) {
			
			              
            echo "<tr>";
            echo "<td>".$row['Birthdate Age 4']."&nbsp;&nbsp;</td>";
            echo "<td>".$row['AgeAsSep01']."&nbsp;&nbsp;</td>";
			echo "<td>".$row['Birthdate Age 3']."&nbsp;&nbsp;</td>";
            echo "<td>".$row['AgeAsSep011']."&nbsp;&nbsp;</td>";
            echo "</tr>";

			
        }
		echo "</table>";
		
		echo '<table>';
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }

		echo "<thead>.<th>2018 Proverty Guidelines</th><br></thead>";
		echo "<th>Family Size</th> .<th>Minimum Income</th> .<th>Max Income</th>";
		//setting up selection from  age table
        $res = $mysqli->query("SELECT * FROM `guidelines`");
        while($row = $res->fetch_assoc()) {
			
			              
            echo "<tr>";
            echo "<td>".$row['familySize']."&nbsp;&nbsp;</td>";
            echo "<td>".$row['minimumIncome']."&nbsp;&nbsp;</td>";
			echo "<td>".$row['maxIncome']."&nbsp;&nbsp;</td>";
            echo "</tr>";

			
        }

		echo "</table>";
		echo "For family units with more than 12 members add $4320 for each additional member.";
    }
}

//creating age object
$ageChart = new Age();
$ageChart->GetData();

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


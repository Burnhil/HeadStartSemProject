<?php
// Chris White
// INEW 2334 001
// 04/29/19
// Final Project

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
<title>Volunteer Opportunities</title>
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
	<img src="pics/volunteer.jpg" height="400" width="500" alt="Head Start">
	<figcaption>Lets put the time in to make a difference!
	</figcaption>
</figure>	
<p>


</p>

<?php

class Volunteer
{


public function Vol(){
		
	print "<h1>Check out whats coming!</h1>";	
	print "Do you love celebrating the holidays, decorating, school sponsered events, class parties?  If so we 
are always looking for volunteers to help us out.  Check with your Head Start Cordinator for oppurtunities.<br><br>";	
		
    $month = date("n");
	print "This months event is ";
   switch( $month ){
        case 1 :     print "News Years Resolutions time!<br><br>";  
        break;
        case 2 :     print "Valentines Day Party!<br><br>";  
        break;
        case 3 :     print "Spring Break!<br><br>";  
        break;
        case 4 :     print "Easter Hunt and Good Friday!<br><br>";   
		break;
	    case 5:      print "Mothers Day and End of Year parties!<br><br>";
        break;
		case 6 :     print "Summer Break!<br><br>";
        break;
        case 7 :     print "Summer Break!<br><br>";
        break;
        case 8 :     print "Back to School!<br><br>";
        break;
        case 9 :     print "Football season!<br><br>";
        break;
        case 10:     print "Fall Festival!<br><br>";
        break;
        case 11:     print "Thanksgiving Party Thanksgiving Break!<br><br>";
        break;
        case 12:     print "Christmas Party before Christmas Break!<br><br>";
        break;
    }

}
}
$someStore = new Volunteer();
$someStore->Vol();
?>
<a href="events.php">Click here to go our events page and check out our calendar.</a>
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
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
<title>Home</title>
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
	<img src="pics/home.jpg" height="400" width="500" alt="Head Start">
	<figcaption>Lets build a better furture with a little headstart!
	</figcaption>
</figure>	
<?php
class Home
{
    public $html;
    private $menuOptions;
    
    public function onTheRange() 
    {
		print "<h1>Where it all started</h1>";
		print "Head Start was founded by President Lynden B. Johnson.  He did
		this to end the most deadly and horrendous war ever known.  He wanted 
		to end poverty and give under privileged children a shot at a better 
		start in school.  So, the Head Start program was made to help not only
		the children with their education but to help serve the family as a whole.
		If you support only the child, the families cycle of poverty cannot be
		broken.  Head Start focuses on the wellbeing of the family by supporting
		them to find help in the community, socially, emotionally and spiritually.
		Head Start is in poverty stricken arears all over the United States and
		is ran by the Administration of Children and Families (ACF). “Head Start
		has served over 32 million children since 1965, growing from an eight-week
		demonstration project to include full day/year services and many program
		options.” (History of Head Start) The aspect I find most rewarding and 
		intriguing about the program is that they offer a conscious discipline 
		(CD) parent curriculum that teaches different approaches to discipline.  
		CD is the intervention that is being pushed the most in the school year 
		of 2018-2019.  It is a focus that is going to help change the way of 
		thinking that in many cases is going to be for the best.   <br>";
		print "<h5>YOU ARE YOUR CHILDS FIRST AND MOST IMPORTANT TEACHER!</h5>";
		
		
    }
}


$beginning = new Home();
$beginning->onTheRange();
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

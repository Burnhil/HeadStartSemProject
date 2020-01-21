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
<title>Health</title>
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
	<img src="pics/health.jpg" height="400" width="500" alt="Head Start">
	<figcaption>Healthy lifes matter!
	</figcaption>
</figure>	

<?php
class Health
{
    public $html;
    private $menuOptions;
    
    public function Healthy() 
    {
		print "<h1>Health Program</h1>";
		print "All screenings are provided free of charge and include:<br>";
		print "<ul><li> height</li><li> weight</li><li> vision</li><li> hearing</li></ul><br><br>";
 
        print "The screenings will be administered by our nursing staff.  Head 
        Start also offers lead and hemoglobin screenings in order to keep our children
        safe and healthy.  Head Start has local dentists come to the classroom for a
        dental check once a year.  If a student in Head Start needs to have dental work
        or vision assistance Head Start will cover all cost in order to help the family
        live a happier healthier life.<br><br>";
		print "Other health services include:<br> <ul><li> developmental</li><li>speech</li> </ul>";
    }
}


$fit = new Health();
$fit->Healthy();
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
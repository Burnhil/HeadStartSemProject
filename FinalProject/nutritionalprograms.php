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
<title>Nutrition</title>
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
	<img src="pics/myplate.jpg" height="500" width="500" alt="Head Start">
	<figcaption>Healthy food healthy lifes!
	</figcaption>
</figure>	


<?php
class Nutrition
{
    public $html;
    private $menuOptions;
    
    public function Yum() 
    {
        $this->menuOptions = [];
        // NOTE: add the following elements to the above array:

		$this->menuOptions[] = "<h1>Choosing to eat right!</h1>";
        $this->menuOptions[] = "Head Start provides a nutrition expert so that meal planning can
		become fun and healthy for the whole family.  Head Start also helps children to brush their
		teeth in the correct way and this is done everyday in class.";
        $this->menuOptions[] = "Focus on whol fruits";
        $this->menuOptions[] = "Vary your veggies";
		$this->menuOptions[] = "Vary your protein routine";
		$this->menuOptions[] = "Make half your grains whole grains";
		$this->menuOptions[] = "Move to low-fat or fat-free milk or yogurt";
		$this->menuOptions[] = "Drink and eat less sodium, saturated fat, and added sugars";
		$this->menuOptions[] = "* These guidelines followed are based from U.S. Department of Agriculture.";
		
		foreach ($this->menuOptions as $value){
		{
        print $value . "<br>". "<br>";
		}

		}  			
    }
}


$food = new Nutrition();
$food->Yum();
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
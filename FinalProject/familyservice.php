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
<title>Family Services</title>
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
	<img src="pics/family.jpg" height="400" width="500" alt="Head Start">
	<figcaption>Without family we are nothing.
	</figcaption>
</figure>	
<h1>Help is here!</h1>
<p>
 Each Head Start location is provided with a staff member that has only one job,
 and that is to help the families find meaningful long lasting relationships with members of
 our community.
</p>
<ul>
<li> The Family Service Assistant is able to 
<ul>
 <li>take families to doctor appointments, 
 
 </li>
 <li> help fill out paperwork from much needed government assistant 
 programs</li>
<li>such as TANF, SNAP, CHIP, WIC and SSI.</li>
 </ul>
 
 </li>
<h5>   However, their specialties do not stop with these programs.</h5>
<li>  The Family Service Assistant can help find 
<ul>
<li>counseling centers</li>
<li>food pantries</li>
<li>education information</li>
<li>and financial aid for 
 your local college</li>
</ul>
</li><br>
<li>  If a problem arises always remember they are there to help
 not judge. </li>
</ul>
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
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
<title>Events</title>
<link rel="stylesheet" href="stylesheet.css">
    <link href="js-calendar/calendar.css" rel="stylesheet">
    <script src="js-calendar/calendar.js"></script>
</head>

<body>
<div id="wrapper">
    <?php // get the navigation menu to render here
	$nav = new navMenu("navMenu");
    $nav->render();
	?>
	
<main>
<figure>
	<img src="pics/events.jpg" height="320" width="500" alt="Head Start">
	<figcaption>Always having fun!
	</figcaption>
</figure>
<br><br>
<h2>Head Start Calendar</h2>	
<p>
Can't wait to see what events we have going on?
Check out our calendar below and come enjoy some fun!
</p><br><br>


	<!-- Calendar javascript pulled from https://code-boxx.com/simple-pure-javascript-calendar-events/ -->
    <!-- source code released under MIT license -->
	<div id="selector">
      <select id="month"></select>
      <select id="year"></select>
      <input type="button" value="SET" onclick="cal.list()"/>
    </div>

    <!-- [CALENDAR] -->
    <div id="container"></div>

    <!-- [EVENT] -->
    <div id="event"></div>

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
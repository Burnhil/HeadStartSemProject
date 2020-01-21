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
<title>Contact Us</title>
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
	<img src="pics/contact.jpg" height="300" width="520" alt="Head Start">
</figure>	
<p> Interested in Head Start program send us your info!</p>

	    <!--Setting up post info to insert store info into data base -->
		
        <form action="process.php" method="post">
            <label><span>First Name: </span><input type="text" name="firstName"></label><br>
            <label><span>Last  Name: </span><input type="text" name="lastName"></label><br>
            <label><span>Kids  Name: </span><input type="text" name="kidsName"></label><br>
            <label><span>Income    : </span><input type="text" name="income"></label><br>
			<label><span>Phone Number: </span><input type="text" name="phoneNumber"></label><br>
            <button type="submit">SUBMIT!</button>
        </form>
<br><br>
</main>

<footer>
	<?php 
	//instantiating footer class and calling render function
    $menu = new foot("foot");
    $menu->render();
	?>
<br><br>
			<!--Set up html form for username/password to send to post -->
	
		<form action="admin.php" method="post">
		<!--Sending first/last/age to post -->
		UserName:<input name="username" type ="text">
		<br>
		Password:<input name="password" type ="text">
		<br>
		<!-- submit the form to FormProcessor -->
		<input type="submit" name="sendButton"> 
		<br><br>
</footer>	

</div>
</body>

</html>
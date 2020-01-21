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
<title>Requirements</title>
<link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<div id="wrapper">
    <?php // get the navigation menu to render here
	$nav = new navMenu("navMenu");
    $nav->render();
	?>
	
<main>
	
<table style="width:100%">
  <tr>
    <th>Application Guidelines</th>
  </tr>
  <tr>
    <td>Applicant's parent or leagal guardian must probide child's age verifictaion and immunization record</td>
  </tr>
  <tr>
    <td>Applicant's parent or legal guardian must provide proof of All income for everyone in the household.<br>
	The proof of income must be for the previous 12 months or the previous calendar year (Jan.-Dec.)
	<ul>
	<li>Current tax return (Form 1040)</li>
	<li>W-2</li>
	<li>1099 Form</li>
	<li>Financial aid</li>
	<li>Child Support(payment record ofr the past 12 months on all children receiving child support)</li>
	<li>Social Secruity Benefits</li>
	<li>Employer letter (letter from the employer must state hourly/weekly wages, time period employee has<br>
	been employed for , date, employer's signature, employer's phone number)</li>
	<li>Pay stubs   (Multiplier: weekly(4.33)        every 2 week (2.16)      bi-monthly (2)</li>
	<li>Any other type of income</li>
    </ul>
	</td
  </tr>

<tr>
<td>Families who report No income must provide a letter of support for any person providing any type of <br>
support stating the following:
<ul>
<li>Date</li>
<li>Who provides the support</li>
<li>Who the support is provided for</li>
<li>What type of support is provided</li>
<li>How long the support has been provided for</li>
<li>Signature</li>
<li>Phone Number</li>
</ul></td>
</tr>  

<tr>
<td>Does anyone in the household receive any of the following Public Assistance or Services?
<ul>
<li>TANF (Temporary Assistance to Needy Families)</li>
<li>SSI (Supplemental Security Income)</li>
<li>SNAP (Supplemental Nutrition Assistant Program)</li>
<li>Medicaid or CHIP (Children's Health Insurance Program)</li>
<li>HUD (Houseing and Urban Development) or housing assistance</li>
<li>WIC (Women, Infants, and Children supplemental nutrition program)</li>
<li>Any other type of public assistance not listed above</li>
</ul></td>
</tr>  

<tr><td>
If YES to any of the above benefits letters must be provided. For Medicaid, CHIP or WIC, the card <br>
must be provided.
</td>
</tr>

<tr><td>
Is the child who is applying for Head Start a foster child?
</td>
</tr>

<tr><td>
If YES, foster placement authorization documentation must be provided.
</td>
</tr>

<tr><td>
Is the child who is applying for Head Start homeless?
</td>
</tr>

<tr><td>
If Yes, the Region 16 Head Start Homeless Verification form must be completed. A letter from <br>
a shelter or the ISD Homeless liaison documentation must be provided for regional sites.
</td>
</tr>

<tr><td>
Does the child applying for Head Start have a documented disability?
</td>
</tr>

<tr><td>
EHS - If child receives services from ECI(Early Childhood Intervention) an IFSP(Individual Family<br>
Service Plan) and a parent signed release of information (HS.09) must be provided.<br>
<br>
HS - If child receives services from a school district, an IEP (Individual Education Program) and <br>
a parent signed release of information (HS.09) must be provided.
</td>
</tr>

<tr><td>
If you have any questions, please call:<ul>
<li>Regional sites: Pat at 677-5306 or Mica at 677-5424</li>
<li>Amarillo sites: Sydia at 677-5333 or Erika at 677-5306</li>
</ul></td>
</tr>

</table>
</p>

<p>
            <a href="agechart.php">Click here to get age requirements and income chart!</a>
</p>
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
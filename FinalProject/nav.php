<?php

class navMenu 
{
    public $html;
    public $navMenu;
    
    public function __construct(string $navMenu) {
        $this->navMenu = $navMenu;
        $this->html = "";
        $this->html .= "<div class='$this->navMenu'>";
		$this->html .= "<nav>";
        $this->html .= "<a href='index.php'>HOME</a><br> ";
        $this->html .= "<a href='health.php'>Health</a><br> ";
        $this->html .= "<a href='familyservice.php'>Family Services</a><br> ";
		$this->html .= "<a href='nutritionalprograms.php'>Nutritional Programs </a><br>";
		$this->html .= "<a href='volunteeropportunities.php'>Volunteer Opportunities </a><br>";
		$this->html .= "<a href='events.php'>Events</a><br>";
		$this->html .= "<a href='requirements.php'>Requirements</a><br>";
		$this->html .= "<a href='contact.php'> Contact </a><br>";

		
		$this->html .= "</nav>";
        $this->html .= "</div>";
    }
    
    public function render() {
        print($this->html);
    }
}


/*
		$this->html .= "<div class='$this->navMenu'>";
		$this->html .= "<ul>";
        $this->html .= "<li><a href='index.php'>HOME</a></li> &nbsp &nbsp";
        $this->html .= "<li><a href='health.php'>Health</a></li> &nbsp &nbsp";
        $this->html .= "<li><a href='familyservice.php'>Family Services</a><li> &nbsp &nbsp";
		$this->html .= "<li><a href='nutritionalprograms.php'>Nutritional Programs </a><li> &nbsp &nbsp";
		$this->html .= "<li><a href='volunteeropportunities.php'>Volunteer Opportunities </a></li> &nbsp &nbsp";
		$this->html .= "<li><a href='events.php'>Events</a></li> &nbsp &nbsp";
		$this->html .= "<li><a href='requirements.php'>Requirements</a><li> &nbsp &nbsp";
		$this->html .= "<li><a href='contact.php'> Contact </a></li>";
		$this->html .= "</ul>";
        $this->html .= "</div>";

*/

?>
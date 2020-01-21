<?php 

class Foot
{
	
	//setting up local variables for menu class
    public $html;
    public $footStyle;
    
	//setting up footer html to be used on each page
    public function __construct(string $footStyle) {
        $this->footStyle = $footStyle;
        $this->html = "";
		$this->html = "<footer>";
		$this->html = "Copyright &copy; 2019 &nbsp; &nbsp";
		$this->html .= "Last Date Modified: &nbsp";
		$this->html .= "	<script> document.write(document.lastModified)</script>";
        $this->html .= "</footer>";
    }
    
	//setting up render funtion to be called to create footer on each page
    public function render() {
        print($this->html);
    }

}

?>

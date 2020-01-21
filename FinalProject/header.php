<?php 

class Head
{
	
	//setting up local variables for menu class
    public $html;
    public $headStyle;
    
	//setting up header html to be used on each page
    public function __construct(string $headStyle) {
        $this->headStyle = $headStyle;
        $this->html = "";
		$this->html = "<header>";
		$this->html .= "<h1>HeadStart</h1>";
		//$this->html .= "<href="stylesheet.css">";
        $this->html .= "</header>";
    }
    
	//setting up render funtion to be called to create header on each page
    public function render() {
        print($this->html);
    }

}

?>


<link rel="stylesheet" href="stylesheet.css">
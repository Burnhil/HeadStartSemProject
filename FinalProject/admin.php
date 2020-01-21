<?php
session_start();        // To start a new or previous session, call this function.
                        // NOTE: it MUST be the first line of code, even above html.
                        
class Authenticator
{
    public $html = "";
    
    public function __construct()
    {
        $username = "";
        $password = "";
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            // The above test expression is checking to see if username and password
            // values are coming from a POST http method.
            $username = $_POST["username"];
            $password = $_POST["password"];
        }

        if($username == "admin" && $password == "test123") {
            // The above test expression is checking to see if username and password
            // values are equal to "admin" and "test123", respectively.
            
            // If username and password are correct, add teh username value to
            // the $_SESSION array, so that value can carry across to page2.php and this page.
            $_SESSION["username"] = $username;
        } 
        
        if(!isset($_SESSION["username"])) {
            // If the user is not logged in (there's no $_SESSION["username"]),
            // show a login form.
            $this->html = "<form action='index.php' method='post'>
                <label>Username: </label><input type='text' name='username'><br>
                <label>Password: </label><input type='password' name='password'>
                <input type='submit' value='Log In'>
            </form>";
        } else {
            // Just to show you're logged in.
            $this->html = "<p>Welcome " . $_SESSION["username"] . "!</p>";
        }
    }
}

$output = new Authenticator();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Session Example</title>
    </head>
    <body>
        <div>
            <?php print($output->html); ?>
            <a href="getData.php">Click here to get contact information</a>
        </div>
    </body>
</html>
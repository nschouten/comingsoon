<?php

Class PublicController extends Controller{

    var $content = "";

    public function main(){
        
        $this->loadView("views/header.php");
        $this->loadView("views/body.php");
        $this->loadView("views/form.php");
        $this->loadView("views/footer.php");
        $this->loadFinalView("views/main.php");
    }

    public function successVIP(){
        
        $this->loadView("views/header.php");
        $this->loadView("views/successVIP.php");
        $this->loadView("views/footer.php");
        $this->loadFinalView("views/main.php");
    }

    public function adminLogin(){

        $this->loadView("views/header.php");
        $this->loadView("views/adminLogin.php");
        $this->loadView("views/footer.php");
        $this->loadFinalView("views/main.php");
    }

    public function processLogin(){
        $_SESSION["adminID"] = Admin::aLogin($_POST["strUsername"], $_POST["strPassword"]);
     
		if ($_SESSION["adminID"])
		{
            $this->goHere("admin", "adminMain"); 
            // if details entered exist in the db allow user to login
		} else {

			$this->goHere("public", "errorLogin"); // if details entered do not exist in the db redirect user back to login form with error
        }
        
    }

    public function processUser(){
        $_SESSION["userID"] = VIP::addUser($_POST['strFirstName'], $_POST['strLastName'], $_POST['strEmail'], $_POST['strPhone'], $_POST['strCountry'], $_POST['strDOB']);

        if($_SESSION["userID"])
        {
            $this->goHere("public", "successVIP");
        } else {
            $this->goHere("public", "errorLogin");
        }
    }
    
    public function errorLogin(){
        $this->loadView("views/loginError.php");
        $this->loadFinalView("views/main.php");

    }
}
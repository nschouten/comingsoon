<?php

Class PublicController extends Controller{

    var $content = "";

    public function main(){
        
        $this->loadView("views/header.php", 1, "content");
        $this->loadView("views/body.php", 1, "content");
        $this->loadView("views/form.php", 1, "content");
        $this->loadView("views/footer.php", 1, "content");
        $this->loadFinalView("views/main.php");
    }

    public function successVIP(){
        
        $this->loadView("views/header.php", 1, "content");
        $this->loadView("views/successVIP.php", 1, "content");
        $this->loadView("views/footer.php", 1, "content");
        $this->loadFinalView("views/main.php");
    }

    public function adminLogin(){

        $this->loadView("views/header.php", 1, "content");
        $this->loadView("views/adminLogin.php", 1, "content");
        $this->loadView("views/footer.php", 1, "content");
        $this->loadFinalView("views/main.php");
    }

    public function processLogin(){
        $_SESSION["aID"] = Admin::aLogin($_POST["strUsername"], $_POST["strPassword"]);
        
		if ($_SESSION["aID"])
		{
            $this->goHere("admin", "main");
            // if details entered exist in the db allow user to login
		} else {

			$this->goHere("public", "errorLogin"); // if details entered do not exist in the db redirect user back to login form with error
        }
        
    }

    public function processUser(){
        $_SESSION["uID"] = VIP::addUser($_POST['strFirstName'], $_POST['strLastName'], $_POST['strEmail'], $_POST['strPhone'], $_POST['strCountry'], $_POST['strDOB']);

        if($_SESSION["uID"])
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
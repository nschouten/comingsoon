<?php
Class AdminController extends Controller{

    var $content = "";

    // public function adminMain(){
        
    //     $this->loadView("views/header.php");
    //     $this->loadView("views/admin.php");
    //     $this->loadView("views/footer.php");
    //     $this->loadFinalView("views/main.php");

    // }

    public function pretrip(){

        if($_SESSION["adminID"] == "")
        {
            $this->goHere("public", "main");
            
        } else {
        
        $this->oAdmin = Admin::getCurrentAdmin();
        
        echo $this->oAdmin->id;
        
        }
    }
}
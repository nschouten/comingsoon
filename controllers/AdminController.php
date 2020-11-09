<?php

Class AdminController extends Controller{

    var $content = "";

    public function main(){
        
        $this->loadView("views/header.php", 1, "content");
        $this->loadView("views/admin.php", 1, "content");
        $this->loadView("views/footer.php", 1, "content");
        $this->loadFinalView("views/main.php");
    }

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
?>
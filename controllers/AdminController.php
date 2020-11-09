<?php

Class AdminController extends Controller{

    var $content = "";

    public function main(){
        
        $this->loadData(Vips::getAll(), "oVips");
        $this->loadView("views/header.php");
        $this->loadView("views/bodyVips.php");
        $this->loadView("views/footer.php");
        $this->loadFinalView("views/main.php");
    }

    public function vip(){

        $this->loadData(Vip::getVIP($_GET['uID']), "oVip");
        $this->loadView("views/header.php");
        $this->loadView("views/bodyVip.php");
        $this->loadView("views/footer.php");
        $this->loadFinalView("views/main.php");
    }

    public function pretrip(){

        if($_SESSION["aID"] == "")
        {
            $this->goHere("public", "main");
            
        } else {
        
        $this->oAdmin = Admin::getCurrentAdmin();
        
        echo $this->oAdmin->id;
        
        }
    }
}
?>
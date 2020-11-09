<?php 

Class Admin{

    public function __construct($adminData){

        $this->admin = $adminData["strUsername"];
    }

    public static function aLogin($strUsername, $strPassword){
        $arrAdmin = DB::query("SELECT * 
                                FROM admin
                                WHERE strUsername='".$strUsername."' AND strPassword='".$strPassword."'");
    
        if($arrAdmin)
        {
            return $arrAdmin[0]["id"];

        } else {

            return false;
        }
    }

    public static function getCurrentAdmin(){

        $arrAdmin = DB::query("SELECT *
                                FROM admin
                                WHERE id =".$_SESSION["adminID"]);

        return new Admin($arrAdmin[0]);
    }
}
?>
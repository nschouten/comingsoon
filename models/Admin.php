<?php 

Class Admin{

    public function __construct($userData){

        $this->admin = $adminData["strUsername"];
    }

    public static function Login($strUsername, $strPassword){

        if($_POST["strUsername"] && $_POST["strPassword"])
        {
            $strUsername = mysqli_real_escape_string(DB::connect(), $_POST["strUsername"]);
            $strPassword = mysqli_real_escape_string(DB::connect(), $_POST["strPassword"]);
    
            $arrAdmin = DB::query("SELECT * FROM admins WHERE strUsername='".$strUsername."' AND strPassword='".$strPassword."'");
        
            print_r($arrAdmin);
            
            if($arrAdmin)
            {
                return $arrAdmin[0]["id"];

            } else {

                return false;
            }
        }
    }

    public static function getCurrentAdmin(){

        $arrAdmin = DB::query("SELECT *
                                FROM admins
                                WHERE id =".$_SESSION["aID"]);

        return new Admin($arrAdmin[0]);
    }
}
?>
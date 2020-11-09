<?php

Class Vip{

    public function __construct($userData){

        $this->id = $userData["id"];
        $this->strFirstName = $userData["strFirstName"];
        $this->strLastName = $userData["strLastName"];
        $this->strEmail = $userData["strEmail"];
        $this->strPhone = $userData["strPhone"];
        $this->strCountry = $userData["strCountry"];
        $this->intAge = $userData["intAge"];
        $this->strFileName = $userData["strFileName"];
        $this->strFullName = $userData["strFullName"];

    }

    public static function getVIP(){
        
        $vip = DB::query("SELECT CONCAT(strFirstName, ' ', strLastName) AS strFullName, id, strEmail, strPhone, strCountry, intAge, strFileName
                        FROM VIP 
                        WHERE id=".$_GET['uID']."");

        $arrVIP = array();

        foreach($vip as $data)
        {
            $arrVIP[] = new Vip($data);
        }

        return $arrVIP;
    }
}

?>
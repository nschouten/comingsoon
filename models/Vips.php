<?php

Class Vips{

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

    static public function getAll(){
        $vips = DB::query("SELECT CONCAT(strFirstName, ' ', strLastName) AS strFullName, id, strEmail, strPhone, strCountry, intAge, strFileName
                            FROM VIP 
                            ORDER BY strLastName");
      
        $arrVIPs = array();

        foreach($vips as $vip)
        {
            $arrVIPs[] = new Vips($vip);
           
        }

        return $arrVIPs;
        
    }
}
?>
<?php

Class VIP{

    public function __construct($userData){

        $this->id = $useData["id"];
        $this->strFirstName = $userData["strFirstName"];
        $this->strLastName = $userData["strLastName"];
        $this->strEmail = $userData["strEmail"];
        $this->strPhone = $userData["strPhone"];
        $this->strCountry = $userData["strCountry"];
        $this->intAge = $userData["intAge"];
        $this->strFileName = $userData["strFileName"];
        $this->strFullName = $userData["strFullName"];

    }

    public static function getAllVIP(){
        $vips = DB::query("SELECT CONCAT(strFirstName, '', strLastName) as FullName, id, strEmail, strPhone, strCountry, intAge, strFileName
                            FROM VIP 
                            ORDER BY strLastName");

        $arrVIPs = array();

        foreach($vips as $vip)
        {
            $arrVIPs[] = new VIP($vip);
        }

        return $arrVIPs;
    }

    public static function getVIP(){
        
        $vip = DB::query("SELECT CONCAT(strFirstName, '', strLastName) as FullName, id, strEmail, strPhone, strCountry, intAge, strFileName
                        FROM VIP 
                        WHERE id=".$_GET['uId']."");

        $arrVIP = array();

        foreach($vip as $data)
        {
            $arrVIP[] = new VIP($data);
        }

        return $arrVIP;
    }
}

?>
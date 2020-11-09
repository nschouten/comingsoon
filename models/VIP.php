<?php

Class VIP{

    public static function getVIP(){
        $vips = DB::query("SELECT * 
                            FROM VIP 
                            ORDER BY strLastName");

        $arrVIP = array();

        foreach($vips as $vip)
        {
            $arrVIP[] = new VIP($vip);
        }

        return $arrVIP;
    }
}

?>
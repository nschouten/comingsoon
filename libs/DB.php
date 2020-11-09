<?php

Class DB{

    var $debug = true; 
    
    static public function connect(){

        // return mysqli_connect("localhost", "root", "root", "comingsoon");
  
        $safeConnect = parse_ini_file("../cs-db.ini"); 

        return mysqli_connect($safeConnect["host"], $safeConnect["user"], $safeConnect["password"], $safeConnect["database"]);

        // if($conn)
        // {
        //     echo("connection success");
        //     die();
        // } else {
        //     echo("failed");
        //     die();
        // }
}

    static public function query($sql){
        
        $oDB = new DB();
        // echo($sql);
        // die();

        $results = mysqli_query($oDB->connect(), $sql);

        if($results)
        {
            $data = ""; 

            while($row = mysqli_fetch_assoc($results))
            {
                $data[] = $row;
            }

            return $data;
            
        }
    }
}
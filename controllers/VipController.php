<?php

Class VipController extends Controller{

    static public function addVIP(){

        $timestamp =round(microtime(true) * 1000);
        $target_dir = "assets/"; 
        $target_file = $target_dir.basename($timestamp.$_FILES["strFileName"]["name"]);
        $ext = strtolower(pathinfo($_FILES['strFileName']['name'], PATHINFO_EXTENSION));
        $fileTypeAllowed = array('pdf', 'png', 'jpeg', 'jpg');

        if(!in_array($ext, $fileTypeAllowed))
        {
            echo ("file type not allowed");
            $target_file = null;

        } else {

            move_uploaded_file($_FILES["strFileName"]["tmp_name"], $target_file);
        }

        if($_POST['strFirstName'] && $_POST['strLastName'] && $_POST['strEmail'] && $_POST['strPhone'] && $_POST['strCountry'] && $_POST['intAge'] && $target_file)
        {
            $con = DB::connect();
            $sql = "INSERT INTO VIP(strFirstName, strLastName, strEmail, strPhone, strCountry, intAge, strFileName)
                    VALUES ('".$_POST['strFirstName']."', '".$_POST['strLastName']."', '".$_POST['strEmail']."', '".$_POST['strPhone']."', '".$_POST['strCountry']."', '".$_POST['intAge']."', '".$target_file."')";
            
            $results = mysqli_query($con, $sql);
            header("location: index.php?controller=public&action=successVIP");

        } else {

        echo("something went wrong");

        }   
    }
}
?>
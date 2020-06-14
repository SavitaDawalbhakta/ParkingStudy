<?php

$dbhost = "localhost";
$dbname = "myTestDB";
$dbuser = "root";
$dbpass = "";


    $link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
    if(!$link){
       // echo "Fail connection";

    }
    else{
        echo "Success..";
    }
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
?>
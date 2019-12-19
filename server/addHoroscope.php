<?php 

session_start();
require ("HoroscopeList.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if(!isset($_SESSION["sign"])) {

                $_SESSION["sign"] = serialize(getHoroscope($_POST["date"]));  
                echo json_encode(true);
                exit;
               
            } else {
                echo json_encode(false."There is already a sign saved in session. Press DELETE before entering a new date.");
                exit;
            }

        } else {
                echo json_encode("Not a POST method");
                exit;
            }
    } else {
        echo json_encode("Not a valid request");
        exit;

    }
        
 
?>
<?php 

    session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            
            if (isset($_POST["date"])) {

                require("HoroscopeList.php");

                $_SESSION["sign"] = serialize(getHoroscope($_POST["date"])); 

                echo json_encode(unserialize($_SESSION["sign"]));

            } else {
                echo json_encode("Date is not set");
            } 
        } else {
                echo json_encode("Not a POST method");
            }
    } else {
        echo json_encode("Not a valid request");

    }
        
  

?>



<?php 

session_start();


if(isset($_SERVER["REQUEST_METHOD"])) {

    if($_SERVER["REQUEST_METHOD"] === "GET") {

        if(isset($_SESSION["sign"])) {

            $sign = json_encode(unserialize($_SESSION["sign"]));
            echo $sign;
            exit;
            
        } else {
            echo json_encode(false);
            exit;
        } 
        
    } else {
        echo json_encode(false);
        exit;
    }

} else {
    echo json_encode("Not a valid request");
    exit;
}



        

    




?>